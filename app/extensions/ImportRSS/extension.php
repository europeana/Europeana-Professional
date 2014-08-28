<?php
// Import RSS feeds for Bolt, by Bob den Otter (bob@twokings.nl

namespace ImportRSS;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class Extension extends \Bolt\BaseExtension
{


    /**
     * Info block for RSSFeed Extension.
     */
    function info()
    {

        $data = array(
            'name' => "ImportRSS",
            'description' => "An Import script for RSS feeds",
            'author' => "Bob den Otter",
            'link' => "http://www.twokings.nl",
            'version' => "1.0",
            'required_bolt_version' => "1.6.9",
            'highest_bolt_version' => "1.6.9",
            'type' => "Import",
            'first_releasedate' => "2014-08-28",
            'latest_releasedate' => "2014-08-28",
        );

        return $data;

    }

    function initialize()
    {
        // Set the path to match in the controller.
        $path = $this->app['config']->get('general/branding/path') . '/importrss';

        // Add the controller, so it can be matched.
        $this->app->match($path, array($this, 'importrss'));

        // Add the menu-option. Only show it to users who have 'extensions' permission
        $this->addMenuOption('Import RSS', 'importrss', 'icon-list', 'extensions');
    }

    public function importrss()
    {
        $this->requireUserPermission('extensions');

        // \util::var_dump($this->config);

        $filename = __DIR__ . "/" . $this->config['file'];
        $file = realpath(__DIR__ . "/" . $this->config['file']);

        $output = "";
        $this->foundcategories = array();

        // No logging. saves memory..
        $this->app['db.config']->setSQLLogger(null);

        if (!empty($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "start";
        }

        // Special code for Europeana

        $this->app['db']->query('DELETE FROM bolt_blogposts WHERE 1');

        if (empty($this->authors)) {
            $temp = $this->app['db']->fetchAll('SELECT id, first_name, last_name FROM bolt_persons');
            foreach($temp as $row) {
                $this->authors[$row['id']] = $row['first_name']." ".$row['last_name'];
            }

            // \Dumper::dump($this->authors);

        }


        switch ($action) {

            case "start":
                if (empty($file) || !is_readable($file)) {
                    $output .= "<p>File $filename doesn't exist. Correct this in <code>app/extensions/ImportWXR/config.yml</code>, and refresh this page.</p>";
                } else {

                    $output .= sprintf("<p>File <code>%s</code> selected for import.</p>", $this->config['file']);

                    $output .= "<p><a class='btn btn-primary' href='?action=dryrun'><strong>Test a few records</strong></a></p>";

                    $output .= "<p>This mapping will be used:</p>";
                    $output .= \util::var_dump($this->config['mapping'], true);
                }
                break;

            case "confirm":

                $res = $this->readRSS($file, 1000);

                foreach ($res as $post) {
                    $output .= $this->importPost($post, false);
                }

                $output .= "<p><strong>Done!</strong></p>";

                if (!empty($this->foundcategories)) {
                    $output .= "<p>These categories were found, make sure you add them to your <code>taxonomy.yml</code></p>";
                    $output .= "<textarea style='width: 400px;'>" . json_encode($this->foundcategories) . "</textarea>";
                }

                break;

            case "dryrun":

                $res = $this->readRSS($file, 5);


                foreach ($res as $post) {
                    $output .= $this->importPost($post, true);
                }

                $output .= sprintf("<p>Looking good? Then click below to import the Records: </p>");

                $output .= "<p><a class='btn btn-primary' href='?action=confirm'><strong>Confirm!</strong></a></p>";



        }

        unset($res);

        return $this->app['render']->render('base.twig', array(
            'title' => "Import RSS (Europeana)",
            'content' => $output
        ));

    }


    public function readRSS($file, $limit = 100)
    {

        $count++;

        // Make sure we are sending a user agent header with the request
        $streamOpts = array(
            'http' => array(
                'user_agent' => 'libxml',
            )
        );

        libxml_set_streams_context(stream_context_create($streamOpts));

        $doc = new \DOMDocument();

        // Load feed and suppress errors to avoid a failing external URL taking down our whole site
        if (!@$doc->load($file)) {
            return new \Twig_Markup('External feed could not be loaded!', 'UTF-8');
        }

        // Parse document
        $feed = array();

        foreach($doc->getElementsByTagName('item') as $node) {

            if ($count++ > $limit) {
                break;
            }

            $item = array(
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'guid' => $node->getElementsByTagName('guid')->item(0)->nodeValue,
                'pubDate' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                'dc:creator' => $node->getElementsByTagName('creator')->item(0)->nodeValue,
                'dc:date' => $node->getElementsByTagName('date')->item(0)->nodeValue,
            );
            array_push($feed, $item);
        }

        return $feed;


    }


    public function importPost($post, $dryrun = true)
    {

        // Find out which mapping we should use.
        $mapping = $this->config['mapping'];

        // If the mapped contenttype doesn't exist in Bolt.
        if (!$this->app['storage']->getContentType($mapping['targetcontenttype'])) {
            return "<p>Bolt contenttype '". $mapping['targetcontenttype'] . "' for posttype '" . $post['post_type'] . "' does not exist.</p>";
        }

        // Create the new Bolt Record.
        $record = new \Bolt\Content($this->app, $mapping['targetcontenttype']);

        // 'expand' the postmeta fields to regular fields.
        if (!empty($post['postmeta']) && is_array($post['postmeta'])) {
            foreach ($post['postmeta'] as $id => $keyvalue) {
                $post[$keyvalue['key']] = $keyvalue['value'];
            }
        }

        // Iterate through the mappings, see if we can find it.
        foreach ($mapping['fields'] as $from => $to) {

            if (isset($post[$from])) {
                // It's present in the fields.

                $value = $post[$from];

                switch ($from) {
                    case "post_parent":
                        if (!empty($value)) {
                            $value = $mapping['fields']['post_parent_contenttype'] . "/" . $value;
                        }
                        break;
                    case "post_date":
                        if (!empty($value)) {
                            // WXR seems to use only one date value.
                            $record->setValue('datechanged', $value);
                            $record->setValue('datecreated', $value);
                            $record->setValue('datepublish', $value);
                        }
                        break;
                }

                switch ($to) {
                    case "username":
                        $value = makeSlug($value);
                        break;
                    case "status":
                        if ($value=="publish") { $value = "published"; }
                        if ($value=="future") { $value = "timed"; }
                        break;
                }

                $record->setValue($to, $value);
            }

        }

        // Perhaps import the categories as well..
        if (!empty($mapping['category']) && !empty($post['terms'])) {
            foreach($post['terms'] as $term) {
                if ($term['domain'] == 'category') {
                    $record->setTaxonomy($mapping['category'], $term['slug']);
                    if (!in_array($term['slug'], $this->foundcategories)) {
                        $this->foundcategories[] = $term['slug'];
                    }
                }
            }
        }

        // Code for Europeana
        $author = $this->fuzzyAuthor($post['dc:creator']);

        $record->setRelation('persons', $author);

        if ($dryrun) {
            $output = "<p>Original RSS item <b>\"" . $post['post_title'] . "\"</b> -&gt; Converted Bolt Record :</p>";
            $output .= \util::var_dump($post, true);
            $output .= \util::var_dump($record, true);
            $output .= "\n<hr>\n";
        } else {
            $this->app['storage']->saveContent($record);
            $output = "Import: " . $record->get('id') . " - " . $record->get('title') . " <small><em>";
            $output .= $this->memUsage() ."mb.</em></small><br>";
        }


        return $output;

    }

    function memusage()
    {
        $mem = number_format(memory_get_usage() / 1048576, 1);
        return $mem;

    }


    function fuzzyAuthor($name) {

        $scores = array();

        foreach($this->authors as $id => $author) {
            $scores[ levenshtein($name, $author)] = $id;
        }

        ksort($scores);

        return current($scores);

    }

}
