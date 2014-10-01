<?php


namespace GoogleSearch;

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

    public function info()
    {
    	
        $data = array(
            'name' =>"Google Enterprise Search",
            'description' => "This extension will allow you to use Google Site Search on your Site.",
            'author' => "Patrick Tettenborn",
            'link' => "http://nexum.de",
            'version' => "0.1",
            'required_bolt_version' => "1.6",
            'highest_bolt_version' => "1.6",
            'type' => "General",
            'first_releasedate' => "2014-08-30",
            'latest_releasedate' => "2014-08-30",
            'allow_in_user_content' => true,
        	'priority' => 11
        );
        
        return $data;
    }
    

    public function initialize()
    {
    	
    	//	listing
    	
    	$this->app->match("/search", array($this, 'googleSearch'));
    	
    	//	options
    	
    	$this->cx = $this->config['cx'];
    	$this->output = $this->config['output'];
    	$this->client = $this->config['client'];
    	$this->template = $this->config['template'];
    	$this->resultsPerPage = $this->config['results_per_page'];
    	$this->searchOptions = array(
    		'max_autocompletions' 	=> 	$this->config['max_autocompletions']
    	);
    	$this->filter = $this->config['filter'];
    	$this->filterOptions = $this->config['filter_options'];
    	
    }

    
    /**
     * 	google api call
     * 
     * 	@params (string) search query
     * 	@return (XML) search result
     */
    private function searchRequest($query,$filter, $start, $num) 
    {
    	
    	$q = urlencode($query);
    	$q .= $filter; 
    	
    	//	build request url
    	$url = "http://www.google.com/cse?cx=".$this->cx."&client=".$this->client."&output=".$this->output."&q=".$q."&hl=en&start=".$start."&num=".$num;
    	//echo $url;
    	
    	//	curl setup
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL,$url);
    	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
    	curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
    	
    	//	submit xml request and get the response
    	$result = curl_exec($ch);
    	curl_close($ch);
    	
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
   		
   		$query = $_GET['q'];
   		
   		
   		$currentFilterOptions = array();
   		foreach ($this->filterOptions as $filter) {
   			if ($_GET[($filter)])
   				$currentFilterOptions[] = $filter;
   		}
   		
   		$filter =  $this->filter . join(',', $currentFilterOptions);
   		
   		//	call search api
   		$resultsRaw = $this->searchRequest($query, $filter, $start, $this->resultsPerPage);
   		
   		//	start xml parsing
   		$resultsXML = simplexml_load_string($resultsRaw);
   		$resultsStart = $resultsXML->RES[SN];
   		$resultsEnd = $resultsXML->RES[EN];
   		$resultsNum = ($resultsXML->RES->M) ? $resultsXML->RES->M : 0 ;

   		//	get suggestion if set
		$suggestion = ( $resultsXML->Spelling->Suggestion ) ? (string) $resultsXML->Spelling->Suggestion : null;
		
   		//	extract information
		$resultsRecords = [];
   		if ($resultsXML->RES->R) {
   			
   			foreach ($resultsXML->RES->R as $item) {
   				
   				$title = (string) $item->T;
   				$link = (string) $item->U;
   				$snippet = (string) $item->S;
   				$urlParts = explode("/", $link);
   				$slug = end($urlParts);
   				$contenttype = (string) $item->xpath('PageMap/DataObject[@type="metatags"]/Attribute[@name="contenttype"]')[0]["value"];
   				
   				//	try to get content element by contenttype and slug
   				$content = $this->app['storage']->getContent($contenttype, array(slug => $slug, returnsingle => true) );

   				if ($content) {
   					$records[] = $content;
   				}
   				else {
   					$imageLink = (string) $item->xpath('PageMap/DataObject[@type="metatags"]/Attribute[@name="og:image"]')[0]["value"];
   					$image = ($imageLink) ? $imageLink : null;
   					$records[] = array(
   						'title' 	=> $title,
   						'link' 		=> $link,
   						'image'		=> $image,
   						'snippet'	=> $snippet
   					);
   				}
   			}
   		}
   		
   		
   		//	set bolt pager
   		$pager = array(
   			totalpages 	=> (int) ceil( $resultsNum / $this->resultsPerPage ),
   			current 	=> $page,
   			link		=> '?q=' . $query . '&page='
   		);
   		
   		
   		//	params 'filter' is only set in global search
   		$default = ($_GET['filter']) ? 'checked' : '';
   		 
   		//	set result filter
   		foreach ($this->filterOptions as $filter) {
   			$this->searchOptions[($filter)] = ($_GET[($filter)]) ? 'checked' : $default;
   		}
   		
   		
		$this->app['twig.loader.filesystem']->addPath(__DIR__);
		
		$this->app['twig']->addGlobal('title', 'Search');
		$this->app['twig']->addGlobal('tag', 'Search');
		$this->app['twig']->addGlobal('cx', $this->cx);
		$this->app['twig']->addGlobal('searchresults', $records);
		$this->app['twig']->addGlobal('resultsnum', $resultsNum);
		$this->app['twig']->addGlobal('suggestion', $suggestion);
		$this->app['twig']->addGlobal('query', $query);
		$this->app['twig']->addGlobal('searchoptions', $this->searchOptions);
		$this->app['twig']->addGlobal('filteroptions', $this->filterOptions);
		
		$this->app['twig']->addGlobal('pager', $pager);
		
		$body = $this->app['render']->render($this->template);
   		
   		return new Response($body, 200);
   		
   	}
}

/**

more:pagemap:metatags-og:
 
*/

