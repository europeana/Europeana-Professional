<?php

namespace Bolt\Extension\Europeana\ZohoImport;

use Bolt\Application;
use Bolt\BaseExtension;
use SimpleXMLElement;
use mjohnson\utility\TypeConverter as TypeConverter;
use Bolt\Events\CronEvents;
use Symfony\Component\HttpFoundation\File\File as File;

class Extension extends BaseExtension
{
    /** @var string Extension name */
    const NAME = 'ZohoImport';
    private $enabledsources;
    private $filedata;
    private $resourcedata;
    private $debug_mode;
    private $structure_tree_map;
    private $remote_request_counter;


    /** @var string Extension's container */
    const CONTAINER = 'extensions.ZohoImport';

    public function getName()
    {
        return Extension::NAME;
    }

    public function initialize()
    {
        // set variables that are needed later
        $this->structure_tree_map = $this->orderStructureTreeMap();
        $this->remote_request_counter = 0;
        $this->debug_mode = $this->config['debug_mode'];

        if ($this->app['config']->getWhichEnd() === 'backend' 
            || $this->app['config']->getWhichEnd() === 'cli') {

            // basic route for pages in backend
            $this->boltPath = $this->app['config']->get('general/branding/path');

            if ($this->app['users']->isAllowed('zoho-import')) {

                // a route for the import is nice too - this might need some access control
                $this->app->match($this->boltPath.'/zohoimport/batchpage', [$this, 'importPage'])
                    ->bind('importPageImportJob')
                    ->method('GET|POST');
    
                // zoho import overview page and menu
                $this->addMenuOption('ZOHO importer', $this->boltPath. "/zohoimport/overview", "fa:users");
                $this->app->get($this->boltPath. "/zohoimport/overview", array($this, 'zohoImportOverview'))
                    ->bind('zohoImportOverview');
            }
        }

        // command line only stuff
        if ($this->app['config']->getWhichEnd() === 'cli') {
            // Add your command
            $this->addConsoleCommand(new Console($this->app));

            // make a cron job available
            // $this->app['dispatcher']->addListener(CronEvents::CRON_HOURLY, array($this, 'importJob'));
        }
    }

    /**
     * Test
     */
    public function testPage()
    {
        return "test";
    }

    /**
     * Overview page
     */
    public function zohoImportOverview()
    {
        $this->requireUserPermission('zoho-import');

        $this->app['htmlsnippets'] = true;
        $this->app['twig.loader.filesystem']->addPath(dirname(__FILE__) . '/assets');

        $data['config'] = $this->config;
        $data['batchoutput'] = '<p>Please do this on the console <tt>$ php app/nut zoho:import</tt>.</p>';

        //$data['batchoutput'] .= '<pre>'.print_r($this->structure_tree_map, true).'</pre>';

        $html = $this->app['render']->render('overview.twig', $data);
        return new \Twig_Markup($html, 'UTF-8');
    }
    
    /**
     * Test page with debug stuff for development
     */
    public function importPage()
    {
        $this->requireUserPermission('zoho-import');

        $this->app['htmlsnippets'] = true;
        $this->app['twig.loader.filesystem']->addPath(dirname(__FILE__) . '/assets');

        $data['config'] = $this->config;
        //$this->debug_mode = true;
        $on_console = false;
        $data['batchoutput'] = $this->importJob($on_console);

        $html = $this->app['render']->render('overview.twig', $data);
        return new \Twig_Markup($html, 'UTF-8');

    }

    /**
     * Test page with debug stuff for development
     */
    public function importJob($on_console = false)
    {
        //dump($this->config);
        if($this->debug_mode) {
            dump($this->config);
        }
        $this->getEnabledSources();
        $output = '';

        $this->remote_request_counter = 0;
        $starttime = time();
        $batchdate = date('Y-m-d H:i:s', $starttime);

        $output .= 'started import at ' . $batchdate . "<br>\n";
        foreach($this->enabledsources as $name => $config) {
            if($this->debug_mode) {
                dump('processing ' . $name);
                // dump($config);
            }
            if($this->config['image_downloads'] !== true) {
                $output .= "importing extra images is disabled<br>\n";
            }
            $this->app['logger.system']->info($name . ' started import - batch:'. $batchdate . ' - ' . $config['source']['type'], array('event' => 'zohoimport'));

            if(is_array($config['source']['loopparams'])) {
                // the import has paging so lets use that
                $this->endcondition=false;
                $localconfig = $config;

                $counter = $config['source']['loopparams']['counter'];
                $stepper = $config['source']['loopparams']['stepper'];
                $start = $config['source']['loopparams']['start'];
                $size = $config['source']['loopparams']['size'];
                $localconfig['source']['getparams'][$counter] = $start;
                $localconfig['source']['getparams'][$stepper] = $size;
                $looper = 1; // just a counter to see how far we are
                $numrecords = 0;

                while($this->endcondition==false) {

                    if($this->debug_mode) {
                        dump($localconfig);
                    }
                    $this->app['logger.system']->info($name . ' step '. $looper .' from:'. $localconfig['source']['getparams'][$counter] . ' - to: '. $localconfig['source']['getparams'][$stepper], array('event' => 'zohoimport'));
                    $this->fetchAnyResource($name, $localconfig);
                    $this->normalizeInput($name, $localconfig);

                    if($looper > 100) {
                        $this->endcondition = true;
                        if($this->debug_mode) {
                            dump($name . ' limit reached - 100 iterations are a bit much, please try to modify this import');
                        }
                        $this->app['logger.system']->warning($name . ' limit reached - 100 iterations are a bit much, please try to modify this import', array('event' => 'zohoimport'));
                        if($on_console) {
                            echo 'import step '. $looper. ': hard import limit reached. 100 iterations are a bit much, please try to modify this import..'."\n";
                        } else {
                            $output .= 'import step '. $looper. ": hard import limit reached. 100 iterations are a bit much, please try to modify this import<br>\n";
                        }
                    } elseif($this->resourcedata[$name]=='nodata') {
                        $this->endcondition = true;
                        if($this->debug_mode) {
                            dump($name . ' found end of data for import');
                        }
                        $this->app['logger.system']->info($name . ' found end of data for import', array('event' => 'zohoimport'));
                        if($on_console) {
                            echo  'import step '. $looper. ': end of data found..'."\n";
                        } else {
                            $output .= 'import step '. $looper. ": end of data found<br>\n";
                        }
                    } else {
                        $this->saveRecords($name, $localconfig);
                        $numrecords += count($this->resourcedata[$name]);

                        if($on_console) {
                            echo  'import step '. $looper. ": " . $localconfig['source']['getparams'][$counter]. ' - '. $localconfig['source']['getparams'][$stepper].'..'."\n";
                        } else {
                            $output .= 'import step '. $looper. ": " . $localconfig['source']['getparams'][$counter]. ' - '. $localconfig['source']['getparams'][$stepper]. "<br>\n";
                        }

                    }

                    // get the last index
                    // and add the size to it
                    $localconfig['source']['getparams'][$counter] = $localconfig['source']['getparams'][$counter] + $size;
                    $localconfig['source']['getparams'][$stepper] = $localconfig['source']['getparams'][$stepper] + $size;

                    $looper++; 
                }

                if($on_console) {
                    echo 'imported ~ '. $numrecords .' records from paged resource..'."\n";
                } else {
                    $output .= 'imported ~ '. $numrecords .' records from paged resource'. "<br>\n";
                }
            } elseif($config['source']['files']) {
                // the import has file paging so lets import every file at once
                $localconfig = $config;
                $numrecords = 0;

                foreach($config['source']['files'] as $file) {
                    $localconfig['source']['file'] = $file;

                    if($this->debug_mode) {
                        dump('loading resource from file:' . $file);
                        dump($localconfig);
                    }

                    $this->fetchAnyResource($name, $localconfig);
                    $this->normalizeInput($name, $localconfig);
                    if($this->resourcedata[$name]!='nodata') {
                        $this->saveRecords($name, $localconfig);
                    }
                    $numrecords += count($this->resourcedata[$name]);
                }

                if($on_console) {
                    echo 'imported '. $numrecords .' records from files resource..'."\n";
                } else {
                    $output .= 'imported '. $numrecords .' records from files resource'. "<br>\n";
                }
            } else {
                if($this->debug_mode) {
                    dump('loading resource:' . $name);
                    // dump($config);
                }
                // the import has no paging so lets import everything at once
                $this->fetchAnyResource($name, $config);
                $this->normalizeInput($name, $config);
                if($this->resourcedata[$name]!='nodata') {
                    $this->saveRecords($name, $config);
                }
                $numrecords = count($this->resourcedata[$name]);

                if($on_console) {
                    echo 'imported '. $numrecords .' records from short resource..'."\n";
                } else {
                    $output .= 'imported '. $numrecords .' records from short resource'. "<br>\n";
                }
                
            }
            $this->depublishRemovedRecords($name, $config, $batchdate);
            
            if($on_console) {
                echo 'depublished removed records..'."\n";
            } else {
                $output .= 'depublished removed records' . "<br>\n";
            }
            
            $this->app['logger.system']->info($name . ' - completed import - batch:'. $batchdate . ' - ' . $config['source']['type'], array('event' => 'zohoimport'));

        }

        $endtime = time();
        $batchendtime = date('Y-m-d H:i:s', $endtime);
        $output .= 'finished import at ' . $batchendtime . "<br>\n";
        $output .= 'the import did ' . $this->remote_request_counter . " remote requests.<br>\n";
        $batchdelta = $endtime - $starttime;

        $output .= 'import took ~ ' . $batchdelta . " seconds<br>\n";

        return $output;
    }

    /**
     * Save the record for each row
     */
    private function saveRecords($name, $config)
    {
        $inputrecords = $this->resourcedata[$name];

        foreach ($inputrecords as $inputrecord) {
            $uid = $config['target']['mapping']['fields']['uid'];

            // check existing
            $record = $this->app['storage']->getContent(
                            $config['target']['contenttype'],
                            array(
                                'uid' => $inputrecord[$uid],
                                'returnsingle' => true,
                                'status' => '!undefined'
                            )
                        );

            if(!$record) {
                if($this->debug_mode) {
                    dump('record is empty, preparing a new one: ' . $inputrecord[$uid]);
                }
                $this->app['logger.system']->info($name . ' - preparing a new record: ' . $inputrecord[$uid], array('event' => 'zohoimport'));
                $record = $this->app['storage']->getEmptyContent($config['target']['contenttype']);
                $items['status'] = $config['target']['defaults']['new'];
            } else {
                if($this->debug_mode) {
                    dump('found existing record: ' . $inputrecord[$uid]);
                }
                $this->app['logger.system']->info($name . ' - updating existing record: ' . $inputrecord[$uid], array('event' => 'zohoimport'));
                $items['status'] = $config['target']['defaults']['updated'];
            }

            // update the new values
            foreach($config['target']['mapping']['fields'] as $key => $value) {
                if(!array_key_exists($value, $inputrecord)) {
                    $inputrecord[$value] = '';
                }
                $items[$key] = $inputrecord[$value];
            }

            // add default field values from config
            if(!empty($config['target']['defaults']['fields'])) {
                if(0 && $this->debug_mode) {
                    dump('setting defaults');
                    dump($config['target']['defaults']['fields']);
                }
                foreach($config['target']['defaults']['fields'] as $defaultfield => $defaultvalue) {
                    $items[$defaultfield] = $defaultvalue;
                }
            }

            if(empty($items['status'])) {
                $items['status'] = 'draft';
            }

            if(array_key_exists('hookafterload', $config['target']) && is_array($config['target']['hookafterload'])) {

                foreach($config['target']['hookafterload'] as $key => $hookparams) {
                    if(!array_key_exists($key, $items) || empty($items[$key])) {
                        // it is a new value for the $items
                        $tempvalue = $this->$hookparams['callback']($inputrecord, $record, $hookparams);
                        // set the new value only if there is a result for the callback
                        if(0 && $this->debug_mode) {
                            dump('tempvalue ' . $key . ': '. $tempvalue);
                        }
                        if($tempvalue) {
                            $items[$key] = $tempvalue;
                        }
                    } else {
                        // it is an existing value for the items
                        $tempvalue = $this->$hookparams['callback']($inputrecord, $record, $hookparams);
                        if(0 && $this->debug_mode) {
                            dump('tempvalue ' . $key . ': '. $tempvalue);
                        }
                        // set the new value if it is different
                        if($tempvalue != $items[$key]) {
                            $items[$key] = $tempvalue;
                        }
                    }
                }
            }
            $sanitize = true;
            if($sanitize) {
                // clean up some variables for inserting
                if(!empty($items['first_name']) || !empty($items['last_name'])) {
                    $items['slug'] = $this->app['slugify']->slugify($items['first_name'] ." ". $items['last_name']);
                } elseif(!empty($items['title']) || !empty($items['locationtitle'])) {
                    $items['slug'] = $this->app['slugify']->slugify($items['title'] ."-". $items['locationtitle']);
                }

                if(!empty($items['network_participation'])) {
                    $items['network_participation'] = explode(";", $items['network_participation']);
                }

                if(!empty($items['community'])) {
                    $items['community'] = explode(";", $items['community']);
                }

                if(!empty($items['twitter']) && !stristr('https://twitter.com/', $items['twitter'])) {
                    $items['twitter'] = 'https://twitter.com/' . trim($items['twitter']);
                }
            }

            // Store the data array into the record
            $record->setValues($items);


            if(0 && $this->debug_mode) {
                dump($items);
                dump($record->values);
            }
            //die();

            $this->app['storage']->saveContent($record);
        }
    }
    
    /**
     * Depublish all records in a contenttype if they are not present in the current feed
     */
    private function depublishRemovedRecords($name, $config, $date)
    {
        if($this->debug_mode) {
            dump('depublishing all removed records for: ' . $name . ' - ' . $date);
        }

        $this->app['logger.system']->info($name . ' - depublishing all removed records - batch:' . $date, array('event' => 'zohoimport'));

        //dump($config);

        $contenttype = $config['target']['contenttype'];
        $unpublished_status = $config['target']['defaults']['removed'];

        $prefix = $this->app['config']->get('general/database/prefix');
        $tablename = $prefix . $contenttype;

        // dont depublish records that are already depublished
        $query = "UPDATE $tablename SET status = :status WHERE datechanged < :datechanged AND status != :status";
        $stmt = $this->app['db']->prepare($query);
        $stmt->bindValue('status', $unpublished_status);
        $stmt->bindValue('datechanged', $date);
        $res = $stmt->execute();

        //dump($result);
        return true;
    }
    
    /**
     * Parse a string into a usable php structure
     */
    private function normalizeInput($name, $config)
    {
        if($config['source']['type'] == 'json') {
            $this->normalizeFromZohoJson($name, $config);
        } elseif($config['source']['type'] == 'plainjson') {
            $this->normalizeFromJson($name, $config);
        } elseif($config['source']['type'] == 'xml') {
            $this->normalizeFromXml($name, $config);
        } elseif($config['source']['type'] == 'simplexml') {
            // this returns an array of simplexml objects for the nodes in the root
            // it is unused
            $this->normalizeFromSimpleXML($name, $config);
        } else {
            $this->app['logger.system']->error('Error occurred during normalize: ' . $name . ' - ' . $config['source']['type'], array('event' => 'zohoimport'));
        }
        // dump($this->resourcedata[$name]);
    }

    /**
     * Parse a nice json string into a usable php structure
     */
    private function normalizeFromJson($name, $config, $input = '')
    {
        $doc = json_decode($this->filedata[$name]);

        $items = TypeConverter::toArray($doc);

        // get down into the root element
        $root = $config['target']['mapping']['root'];
        $elements = split('\.', $root);

        foreach($elements as $elm) {
            $items = $items[$elm];
        }

        // Modify deep nested json objects
        $test = reset($items);
        if(!TypeConverter::isArray($test)) {
            foreach($items as $value) {
                $value = TypeConverter::toArray($value);
                $value = $this->convertNulls($value);
                $values[] = $value;
            }
            $items = $values;
        }
        $this->resourcedata[$name] = $items;
        return $doc;
    }

    public function convertNulls($array) {
        foreach($array as $key => $value) {
            if ($value === null) {
                $array[$key] = '';
            }
        }
        return $array;
    }
    /**
     * Parse a json string into a usable php structure
     */
    private function normalizeFromZohoJson($name, $config, $input = '')
    {
        $doc = json_decode($this->filedata[$name]);

        if(empty($doc)) {
            if($this->debug_mode) {
                dump('empty $doc');
                dump($doc);
            }
            die();
        }

        $items = TypeConverter::toArray($doc);

        // get down into the root element
        $root = $config['target']['mapping']['root'];
        $elements = split('\.', $root);
        if($elements[0] == 'response' && !$items['response']) {
            array_shift($elements);
        }

        if(array_key_exists('nodata', $items['response']) && is_array($items['response']['nodata'])) {
            $this->resourcedata[$name] = 'nodata';
            return $doc;
        }

        foreach($elements as $elm) {
            $items = $items[$elm];
        }

        if(empty($items)) {
            if($this->debug_mode) {
                dump('empty $items');
                dump($doc);
                dump($items);
            }
            die();
        }

        // Modify deep nested json objects
        $test = reset($items);
        if(!TypeConverter::isArray($test)) {
            foreach($items as $value) {
                $value = TypeConverter::toArray($value);

                $FLtest = reset($value['FL']);
                if(!TypeConverter::isArray($FLtest)) {
                    foreach($value['FL'] as $FLvalue) {
                        $FLvalues[] = TypeConverter::toArray($FLvalue);
                    }
                    $value['FL'] = $FLvalues;
                }
                $values[] = $value;
            }
            $items = $values;
        }

        $items = $this->flattenZOHO($items);

        $this->resourcedata[$name] = $items;
        return $doc;
    }


    /**
     * Parse an xml string into a usable php structure
     */
    private function normalizeFromXml($name, $config, $input = '')
    {
        $doc = new SimpleXMLElement($this->filedata[$name]);
        $items = TypeConverter::xmlToArray($doc, TypeConverter::XML_MERGE);

        // get down into the root element
        $root = $config['target']['mapping']['root'];
        $elements = split('/', str_replace('//', '', $root));
        if($elements[0] == 'response' && !$items['response']) {
            array_shift($elements);
        }

        if(array_key_exists('nodata', $items['response']) && is_array($items['response']['nodata'])) {
            $this->resourcedata[$name] = 'nodata';
            return $doc;
        }

        foreach($elements as $elm) {
            $items = $items[$elm];
        }

        $items = $this->flattenZOHO($items);

        $this->resourcedata[$name] = $items;
        return $doc;
    }

    /**
     * Flatten the array values in a record that comes from ZOHO
     *
     * This specifically gets the key => data pairs
     * in the subkey FL top the fop level of a row
     * 
     * from
     *     $array[$i]['FL'][$j][val=>'key',(value|content)=>'data']
     * into
     *     $array[$i][key]=data
     */
    private function flattenZOHO($array) {
        $test = reset($array);
        if(array_key_exists('FL', $test)) {
            foreach($array as $rowid => $row) {
                foreach($row['FL'] as $fk => $fv) {
                    $array[$rowid][$fv['val']] = $fv['value']?trim($fv['value']):trim($fv['content']);
                }
            }
        }

        return $array;
    }
    
    /**
     * Parse an xml string into a usable php structure with simplexml
     *
     * UNUSED
     */
    private function normalizeFromSimpleXML($name, $config, $input = '')
    {
        $doc = new SimpleXMLElement($this->filedata[$name]);
        $root = $config['target']['mapping']['root'];
        $items = $doc->xpath($root);
        $this->resourcedata[$name] = $items;
        return $doc;
    }

    /**
     * Check if the resource is a local file or a remote file and fetch it
     */
    private function fetchAnyResource($name, $enabled)
    {
        if(array_key_exists('file', $enabled['source'])) {
            $source = __DIR__."/".$enabled['source']['file'];
            if(file_exists($source)) {
                $this->fetchLocalResource($name, $source);
            }
        } else {
            $source = $enabled['source']['url'];

            if(array_key_exists('getparams', $enabled['source']) && !empty($enabled['source']['getparams'])) {
                $gkeys = [];
                foreach((array) $enabled['source']['getparams'] as $gkey => $gvalue) {
                    $gkeys[] = $gkey ."=" . urlencode($gvalue);
                }
                $source .= "?" . join('&', $gkeys);
            }

            $this->fetchRemoteResource($name, $source);
        }
    }

    /**
     * Fetch a local file resource
     */
    private function fetchLocalResource($name, $url) {
        try {
            $data = file_get_contents($url);
            $this->filedata[$name] = $data;
        } catch (RequestException $e) {
            $this->app['logger.system']->error('Error occurred during fetch: ' . $e->getMessage(), array('event' => 'zohoimport'));
        }
    }
    
    /**
     * Fetch a remote url resource
     */
    private function fetchRemoteResource($name, $url) {
        $curlOptions = array('CURLOPT_CONNECTTIMEOUT' => 5);
        // Set cURL proxy options if there's a proxy
        if ($this->app['config']->get('general/httpProxy')) {
            $curlOptions['CURLOPT_PROXY'] = $this->app['config']->get('general/httpProxy/host');
            $curlOptions['CURLOPT_PROXYTYPE'] = 'CURLPROXY_HTTP';
            $curlOptions['CURLOPT_PROXYUSERPWD'] = $this->app['config']->get('general/httpProxy/user') . ':' . $this->app['config']->get('general/httpProxy/password');
        }

        try {
            if (!isset($this->app['deprecated.php']) || $this->app['deprecated.php']) {
                $data = $this->app['guzzle.client']->get($url, null, $curlOptions)->send()->getBody(true);
            } else {
                $data = $this->app['guzzle.client']->get($url, array(), $curlOptions)->getBody(true);
            }

            $this->countRemoteRequest('image'); // count remote requests to determine if we hit a limit yet

            $this->filedata[$name] = $data;
        } catch (RequestException $e) {
            $this->app['logger.system']->error('Error occurred during fetch: ' . $e->getMessage(), array('event' => 'zohoimport'));
            // make sure we can use this key later
            $this->filedata[$name] = false;
        }
    }

    /**
     * increment remote request counter
     */
    public function countRemoteRequest($name = 'unknown') {
        $this->remote_request_counter++;
    }
    /**
     * HOOKAFTERLOAD:
     * Set a title if none is set 
     */
    public function setFallbackTitle($source_record, &$target_record, $params)
    {
        $result = null;
        if(array_key_exists($params['source_field'], $source_record) && !empty($source_record[$params['source_field']])) {
            if(0 && $this->debug_mode) {
                dump('setting title');
                dump($params);
                dump($params['source_field'] . ": " . $source_record[$params['source_field']] . ' - '.  $params['target_field'] . ": " .$target_record->values[$params['target_field']]);
                //dump($source_record);
                dump($target_record->values);
            }
            if(empty($target_record->values[$params['target_field']])) {
                $result = $source_record[$params['source_field']];
                $target_record->values[$params['target_field']] = $result;
            }
        }
        if(0 && $this->debug_mode) {
            dump('new ' . $params['target_field'] . ": " . $result);
        }
        return $result;
    }

    /**
     * HOOKAFTERLOAD:
     * Check if a field is an array
     * If yes, encode it
     */
    public function flattenArrays($source_record, $target_record, $params)
    {
        if(array_key_exists($params['source_field'], $source_record) && !empty($source_record[$params['source_field']])) {
            if(is_array($source_record[$params['source_field']])) {
                $result = (string)json_encode($source_record[$params['source_field']]);
                if(0 && $this->debug_mode) {
                    dump('flattening');
                    dump($result);
                }
            } else {
                $result = $source_record[$params['source_field']];
            }
        }
        return $result;
    }

    /**
     * HOOKAFTERLOAD:
     * Get the structuretree parent id and return it
     * If not structure tree id is found return the default id
     */
    public function setParentStructure($source_record, $target_record, $params)
    {
        // dump('setParentStructure');
        $id = $this->structure_tree_map['default_id'];
        $lastrank = $this->structure_tree_map['lowest_rank'];
        
        if(array_key_exists($params['source_field'], $source_record) && !empty($source_record[$params['source_field']])) {
            $labels = explode(';',$source_record[$params['source_field']]);
            // loop trough all of found labels
            // highest ranks are first in zoho
            // so return the value for the first matched rank
            foreach($labels as $label) {
                $rank = $this->structure_tree_map['ranks'][$label];
                $id = $this->structure_tree_map['ids'][$label];
                return $id;
                // and override previously set label if the rank is higer (number is lower)
                // if($rank < $lastrank) {
                //     $rank = $lastrank;
                //     $id = $this->structure_tree_map['ids'][$label];
                // }
            }
        }
        return $id;
    }
    
    /**
     * HOOKAFTERLOAD: Get a photo from ZOHO
     * Save it to the filesystem
     * And return the url
     */
    public function downloadZohoPhotoFromURL($source_record, $target_record, $params)
    {
        //prepare url
        if(array_key_exists($params['source_field'], $source_record) && !empty($source_record[$params['source_field']])) {
            $params['name'] = $source_record[$params['source_field']];
            $params['source_url'] = str_replace($params['source_field'], $params['name'], $params['source_url']);
        }

        // only fetch photos from contacts that need it
        if($source_record['public_photo'] !== true) {
            return false;
        }

        if($this->config['image_downloads'] !== true) {
            return false;
        }

        // prevent hammering the limits of zoho by only fetching images after minimum of 36 hours
        $existing_image = $target_record->get('image');
        if($existing_image && array_key_exists('file',  $existing_image)) {
            $existing_image_path = $this->app['paths']['filespath'] . '/'. $existing_image['file'];
            if(file_exists($existing_image_path)) {
                if($this->debug_mode) {
                    dump('found existing image file, checking age');
                }
                //$existing_file = new File($existing_image_path);
                //dump($existing_file);
                //$existing_image_info['type'] = exif_imagetype($existing_image_path);
                //$existing_image_info['gisz'] = getimagesize($existing_image_path);
                //$existing_image_info['mime'] = image_type_to_mime_type($existing_image_info['type']);
                $existing_image_age = time() - filemtime($existing_image_path);
                if($existing_image_age < (60*60*36)) {
                    if($this->debug_mode) {
                        dump('last change was not long enough ago (' . $existing_image_age . ' seconds) - skipping image fetching for user ' . $params['name']);
                    }
                    return false;
                }
            }
        }

        $cachepath = $this->app['paths']['cachepath'];
        $image['tmpname'] = $cachepath . '/'. $params['name'];
        $image['id'] = $params['name'];
        if(!file_exists($image['tmpname'])) {
            if($this->debug_mode) {
                dump('looking up profile photo for user ' . $params['name']);
            }

            // really fetch the file
            $file = $this->fetchRemoteResource($params['name'], $params['source_url']);

            // no file
            if(empty($this->filedata[$params['name']])) {
                if($this->debug_mode) {
                    dump('empty image');
                }
                return false;
            }

            // no valid image
            if(stristr($this->filedata[$params['name']], 'No photo attached to this record id')) {
                if($this->debug_mode) {
                    dump('no photo for this id');
                }
                unset($this->filedata[$params['name']]);
                return false;
            }

            $image['size'] = file_put_contents($image['tmpname'], $this->filedata[$params['name']]);
            unset($this->filedata[$params['name']]);
        } else {
            // there was a tempfile already
            // it will be cleaned up soon
            if($this->debug_mode) {
                dump('dangling tempfile');
            }
        }

        $image['type'] = exif_imagetype($image['tmpname']);
        $image['gisz'] = getimagesize($image['tmpname']);
        $image['mime'] = image_type_to_mime_type($image['type']);

        switch($image['mime']) {
            case 'image/gif':
                $image['extension'] = '.gif';
                break;
            case 'image/png':
                $image['extension'] = '.png';
                break;
            case 'image/jpg':
                $image['extension'] = '.jpg';
                break;
            default:
                $image['extension'] = '.jpg';
                break;
        }
        $image['target_name'] = $image['id'] . $image['extension'];
        $image['target_dbname'] = $this->config['image_path'] . '/' . $image['target_name'];
        $image['target_dir'] = $this->app['paths']['filespath'] . '/' . $this->config['image_path'];
        $image['target_path'] = $image['target_dir'] . '/' . $image['target_name'];

        // move the file to real directory
        $imagefile = new File($image['tmpname']);
        $newfile = $imagefile->move($image['target_dir'], $image['target_name']);

        //dump($image);

        // return the filename for record
        return json_encode(array('file' => $image['target_dbname'], 'title' => $image['id']));
    }

    /**
     * Read resources from config
     */
    private function getEnabledSources($name = false)
    {
        // only load it if it's empty
        if(empty($this->enabled)) {
            $this->enabledsources = [];

            foreach($this->config['remotes'] as $key => $source) {
                if($source['enabled'] === true) {
                    $this->enabledsources[$key] = $source;
                }
            }
        }

        if($name!==false) {
            if(!empty($this->enabledsources[$name])) {
                return $this->enabledsources[$name];
            } else {
                return false;
            }
        }

        return $this->enabledsources;
    }
    
    /**
     * Default config options
     *
     * @return array
     */
    protected function getDefaultConfig()
    {
        return [
            'debug_mode' => 'false',
            'image_path' => 'zoho_images',
            'remotes' => [
                'atom_feed_example' => [
                    'enabled' => false,
                    'source' => [
                        'url' => 'http://example.com/atom',
                        'getparams' => [
                            'authtoken' => 'a-itis-a-me-a-mario',
                            'scope' => 'test',
                            'test' => 'test'
                        ],
                        'type' => 'xml'
                    ],
                    'target' => [
                        'contenttype' => 'partners',
                        'defaults' => [ 
                            'new' => 'published',
                            'updated' => 'published',
                            'removed' => 'unpublished',
                            'fields' => []
                        ],
                        'mapping' => [
                            'root' => '//feed/entry/id',
                            'fields' => [
                                'id' => 'guid',
                                'last_modified' => 'updated',
                                'title' => 'title',
                                'body' => 'item',
                                'type' => 'category::term'
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * Utility function for setParentStructure
     * Orders and prepares the configuration value for speedy processing
     */
    private function orderStructureTreeMap()
    {
        if($this->debug_mode) {
            dump($this->config);
        }
        $ranklabels = $ids = $ranks = [];
        $structure_tree_map = $this->config['structure_tree_map'];
        $ranklabels['source'] = $structure_tree_map;
        $lowestrank = 0;

        foreach($structure_tree_map as $key => $map) {
            $ranks[$map['label']] = $map['rank'];
            if($map['rank']>$lowestrank) {
                $lowestrank = $map['rank'];
                $default_id = $map['id'];
            }
            $ids[$map['label']] = $map['id'];
        }
        $ranklabels['lowest_rank'] = $lowestrank;
        $ranklabels['default_id'] = $default_id;

        $ranklabels['ranks'] = $ranks;
        $ranklabels['ids'] = $ids;

        //dump($ranklabels);
        return $ranklabels;
    }

}

