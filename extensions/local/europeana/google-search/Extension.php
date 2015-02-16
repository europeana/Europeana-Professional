<?php

namespace Bolt\Extension\Europeana\GoogleSearch;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Extension extends \Bolt\BaseExtension
{
    private $cx;
    private $output;
    private $client;
    private $template;
    private $resultsPerPage;
    private $searchOptions;
    private $filter;
    private $filterOptions;

    // protected function getDefaultConfig() {
    //     return array(
    //         'client' => 'google-csbe',
    //         'cx' => '000000000000000000000:aaaaaaaaaaa',
    //         'output' => 'xml_no_dtd',
    //         'template' => 'listing_search.twig',
    //         'results_per_page' => 10,
    //         'max_autocompletions' => 5,
    //         'filter' => '+more:pagemap:metatags-contenttype:',
    //         'filter_options' => ['pages', 'blogposts', 'events', 'publications', 'pressreleases', 'projects', 'taskforces', 'jobs', 'persons'],
    //     );
    // }

    public function initialize()
    {
        // listing
        $this->app->match("/search", array($this, 'googleSearch'));

        // options
        $this->cx = $this->config['cx'];
        $this->output = $this->config['output'];
        $this->client = $this->config['client'];
        $this->template = $this->config['template'];
        $this->resultsPerPage = $this->config['results_per_page'];
        $this->searchOptions = array('max_autocompletions' => $this->config['max_autocompletions']);
        // $this->filter = $this->config['filter'];
        $this->filterOptions = $this->config['filter'];

    }

    /**
     * google api call
     *
     * @params (string) search query
     * @return (XML) search result
     */
    private function searchRequest($query, $start, $num, $sort)
    {
        $q = $query;

        // build request url
        $url = "http://www.google.com/cse?cx=".$this->cx."&client=".$this->client."&output=".$this->output."&q=".$q."&hl=en&start=".$start."&num=".$num."&sort=".$sort;

        // curl setup
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s

        // submit xml request and get the response
        $result = curl_exec($ch);
        curl_close($ch);

        $this->app['twig']->addGlobal('searchlink', $url);

        return $result;
    }

    /**
     * build the search result
     *
     * @return (Symfony\Component\HttpFoundation\Response)
     *
     */
    public function googleSearch() {
        $page = ( is_null($_GET['page']) ) ? 1 : $_GET['page'];
        $start = ( ($page-1) * $this->resultsPerPage );
        $sort = ( is_null($_GET['sort']) ) ? '' : $_GET['sort'];

        $q = $_GET['q'];
        $defaultFilter = $_GET['filter'];
        $query = urlencode($q);

        $filterOptions = '';
        $activeFilter = [];


        // search with the header search bar, all filter enabled
        if (!$defaultFilter) {
            foreach ($this->filterOptions as $key => $filter) {
                if (!isset($_GET[($filter['name'])])) {
                    $this->filterOptions[$key]['checked'] = '';
                    $filterOptions .= $filter['filter'];
                }
                else $activeFilter[] = $filter['name']; 
           }
        }
        else $activeFilter[] = 'filter=on'; 


        //  add search filter to query
        $query .= $filterOptions;

        // call search api
        $resultsRaw = $this->searchRequest($query, $start, $this->resultsPerPage, $sort);

        // start xml parsing
        $resultsXML = simplexml_load_string($resultsRaw);
        $resultsStart = $resultsXML->RES[SN];
        $resultsEnd = $resultsXML->RES[EN];
        $resultsNum = ($resultsXML->RES->M) ? $resultsXML->RES->M : 0 ;

        // get suggestion if set
        $suggestionRaw = ( $resultsXML->Spelling->Suggestion ) ? (string) $resultsXML->Spelling->Suggestion : null;


        if ($suggestionRaw) {
            // $suggestion = trim(explode('-more:', $suggestionRaw)[0]);
            $suggestion = trim(explode('</b>', $suggestionRaw)[0]);
            $suggestion .= '</b>';
        }


        // extract information
        $resultsRecords = [];
        if ($resultsXML->RES->R) {
            foreach ($resultsXML->RES->R as $item) {
                $title = (string) $item->T;
                $link = (string) $item->U;
                $snippet = (string) $item->S;
                $urlParts = explode("/", $link);
                $slug = end($urlParts);
                $contenttype = (string) $item->xpath('PageMap/DataObject[@type="metatags"]/Attribute[@name="contenttype"]')[0]["value"];

                // try to get content element by contenttype and slug
                $content = $this->app['storage']->getContent($contenttype, array(slug => $slug, returnsingle => true) );

                $imageLink = (string) $item->xpath('PageMap/DataObject[@type="cse_image"]/Attribute[@name="src"]')[0]["value"];
                if (!$imageLink)
                    $imageLink = (string) $item->xpath('PageMap/DataObject[@type="cse_thumbnail"]/Attribute[@name="src"]')[0]["value"];


                $image = ($imageLink) ? $imageLink : null;
                $records[] = array(
                        'title' => $title,
                        'link' => $link,
                        'image' => $image,
                        'snippet' => $snippet,
                        'boltRecord' => $content
                        );
            }
        }

        // set bolt pager
        $pager = array(
                totalpages => (int) ceil( $resultsNum / $this->resultsPerPage ),
                current => $page,
                link => '?q=' . $q . '&' . join('&',$activeFilter) . '&sort=' . $sort .  '&page='
                );


        // params 'filter' is only set in global search
        $default = ($_GET['filter']) ? 'checked' : '';


        $this->app['twig.loader.filesystem']->addPath(__DIR__);

        $this->app['twig']->addGlobal('title', 'Search');
        $this->app['twig']->addGlobal('tag', 'Search');
        $this->app['twig']->addGlobal('cx', $this->cx);
        $this->app['twig']->addGlobal('searchresults', $records);
        $this->app['twig']->addGlobal('resultsnum', $resultsNum);
        $this->app['twig']->addGlobal('suggestion', $suggestion);
        $this->app['twig']->addGlobal('query', $q);
        $this->app['twig']->addGlobal('searchoptions', $this->searchOptions);
        $this->app['twig']->addGlobal('filteroptions', $this->filterOptions);
        $this->app['twig']->addGlobal('pager', $pager);
        $this->app['twig']->addGlobal('sort', $sort);
        $this->app['twig']->addGlobal('activeFilter', $activeFilter);
        

        $body = $this->app['render']->render($this->template);

        return new Response($body, 200);
    }
}
