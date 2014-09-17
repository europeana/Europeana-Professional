<?php

namespace StructureTree;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Extension extends \Bolt\BaseExtension
{
    public function info()
    {
        return array(
            'name' => "StructureTree",
            'description' => "Provides a simple hierarchical site structure",
            'author' => "Patrick Tettenborn",
            'link' => "http://nexum.de",
            'version' => "0.1",
            'required_bolt_version' => null,
            'highest_bolt_version' => null,
            'type' => "General",
            'first_releasedate' => null,
            'latest_releasedate' => null,
            'priority' => 10
        );
    }

    
    public function initialize()
    {
    	
    	//	slug binding
    	$this->app->get("/{slug}/", array($this, 'structureLink'))
    	->assert('slug', '[a-zA-Z0-9_\-]+')
    	->bind('structureLink');
    	
    	//	parent + slug binding
        $this->app->get("/{parentSlugs}/{slug}/", array($this, 'structureParentLink'))
        	->assert('parentSlugs', '.+')
        	->assert('slug', '[a-zA-Z0-9_\-]+')
            ->bind('structureParentLink');
        
        //	load contenttypes
        $this->contenttypeslugs = $this->config['contenttypes'];
        
        //	initialize twig function for link generating
        $this->addTwigFunction('structurelink', 'getStructureLink');
        $this->addTwigFunction('breadcrumbitems', 'breadCrumbItems');
        $this->addTwigFunction('subsite', 'subSite');
        
    }
    
    
    
	/**
	 * 	search subsite in parents by parentid 
	 * 	@param $record (object)
	 * 	@param $parent (object)
	 * 	@return $parent (object)
	 */
    public function subSite($record, $parent) {
    	
    	$parentId = ($record['parents']) ?  $parent['id'] : $record['id'];
    	$parents = $this->app['session']->get('parents');
    	
    	while ($parentId) {
    		$parent = $parents[$parentId];
    		if ($parent['subsite']|length)
    			return $parent['subsite'];
    		$parentId = $parents[$parentId]['parentid'];
    	}
    	
    	return '';
    }
	
    
    
    /**
     * 	generate contentlink for structure binded records
     * 	contenttypes can can belong to more than one stucture.
     * 	if no parent is set return default link.
     */
    public function getStructureLink($record) {
		//	todo: cleanup    	
    	$parents = $this->app['session']->get('parents');
    	
    	//	no structure
    	if ($parents[$record['parents'][0]] != "") {
    		$link = $parents[$record['parents'][0]]['path'] . $record['slug'];
    	}
    	//	is structure
    	else if ( $record['parents'][0] != "" || $record['parent'][0] != "" ) {
    		$link =  $parents[$record['parent']]['path'] . $record['slug'];
    		//$link = ($curStructure) ? $parents[$record['parent']]['path'] . $record['slug'] : $parents[$record['parent'][0]]['path'] . $record['slug'];
    	}
    	else $link = $record->link();
    	
    	return $link;
    }
    
   
    
    /**
     * 	build breadcrumb 
     * 	@return (array) breadcumb
     */
    public function breadCrumbItems($record, $parent) {
    	
    	$parents = $this->app['session']->get('parents');
    	$items = array();
    	$parentId = $parent['id'];
    	
    	while ($parentId) {
    		$parent = $parents[$parentId];
    		array_push($items, $parent);
    		$parentId = $parents[$parentId]['parentid'];
    	}
    	
    	return array_reverse($items);
    }
    
    
    
    /**
     * 	handle slug request
     * 	search structure by slug (slug must be a structure)
     */
    public function structureLink(Request $request, $slug)
    {
	
    	return self::structureParentLink($request, null, $slug);
    }
    
    
    /**
     * 	
     */
    public function structureParentLink(Request $request, $parentSlugs, $slug) 
    {
    	 
    	// 	get structures with parents and save to session
    	$structures = ( !is_array( $this->app['session']->get('parents')) ) ?
    	self::setStructuresToSession() : $this->app['session']->get('parents');
    	 
    	//debug
    	self::setStructuresToSession();
    	
    	if ($parentSlugs) {
			
	    	// validate url
	    	$validUrl = false;
	    	foreach ($structures as $structure) {
	    		if ($structure['testpath'] == $parentSlugs) {
	    			$validUrl = true;
	    			break;
	    		}
	    	}
	    	if (!$validUrl)	self::abort($slug);
	    	
	    	//	get last parentslug
	    	$parentSlugs = split('/', $parentSlugs);
	    	$parentSlug = end($parentSlugs);
	
	    	
	    	// 	get parent structure by slug
	    	$parentStructureContent = $this->app['storage']->getContent('structures', array('slug' => $parentSlug, 'returnsingle' => true));
    	}
    	
    	// 	is contenttypeslug strucutre?
    	if ( in_array($slug, $this->app['session']->get('structuresslugs')) ) {

    		//$structureContent = $this->app['storage']->getContent('structures', array('slug' => $slug, 'returnsingle' => true));
    		
    		//	abort by no structure by slug
    		//if (!$structureContent) self::abort($slug);
    		//return self::setStructureContent($structureContent, $parentStructureContent);
    		return self::setStructureContent($slug, $parentStructureContent);
    	}
    	//	contenttypeslug is not strucutres
    	else {
    		return self::setContent($slug, $parentStructureContent);
    	}
    	
    }
    
    
    /**
     * 	set content for contenttypeslug != strucutres
     */
    private function setContent($slug, $parentStructureContent) 
    {

    	foreach ($this->contenttypeslugs as $contenttypeslug ) {
    		$content = null;
    		$contenttype = $this->app['storage']->getContentType($contenttypeslug);
    		$content = $this->app['storage']->getContent($contenttype['slug'], array('slug' => $slug, 'parents'=> '%' . $parentStructureContent->id . '%', 'returnsingle' => true));
    		if ($content->values) break;
    	}
    	
    	
    	// No content, no page!
    	if (!$content) {
    		// There's one special edge-case we check for: if the request is for the backend, without trailing
    		// slash and it is intercepted by custom routing, we forward the client to that location.
    		if ($slug == trim($this->app['config']->get('general/branding/path'), "/")) {
    			simpleredirect($this->app['config']->get('general/branding/path') . "/");
    		}
    		self::abort($slug);
    	}
    	
    	// Then, select which template to use, based on our 'cascading templates rules'
    	$template = $content->template();
    	
    	// Fallback: If file is not OK, show an error page
    	$filename = $this->app['paths']['themepath'] . "/" . $template;
    	if (!file_exists($filename) || !is_readable($filename)) {
    		$error = sprintf(
    				"No template for '%s' defined. Tried to use '%s/%s'.",
    				$content->getTitle(),
    				basename($this->app['config']->get('general/theme')),
    				$template
    		);
    		$this->app['log']->setValue('templateerror', $error);
    		$this->app->abort(404, 'not found');
    	}
    	
    	
    	// Setting the canonical path and the editlink.
    	$this->app['canonicalpath'] = $content->link();
    	$this->app['paths'] = getPaths($this->app);
    	
    	//$this->app['editlink'] = path('editcontent', array('contenttypeslug' => $contenttype['slug'], 'id' => $content->id));
    	$this->app['edittitle'] = $content->getTitle();
    	$this->app['twig']->addGlobal('record', $content);
    	$this->app['twig']->addGlobal('parent', $this->app['session']->get('parents')[$parentStructureContent->values['id']] );
    	//$this->app['twig']->addGlobal($contenttype['singular_slug'], $content);
    	
    	// Render the template and return.
    	return $this->app['render']->render($template);
    }
    
	/*  	
    private function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
    	$sort_col = array();
    	foreach ($arr as $key=> $row) {
    		$sort_col[$key] = $row[$col];
    	}
    
    	array_multisort($sort_col, $dir, $arr);
    }
    */
    
    
    
	/**
	 * 	set content for structures
	 */    
    private function setStructureContent($slug, $parentContent = null) #
    {
    	
    	$structureContent = $this->app['storage']->getContent('structures', array('slug' => $slug,'parent' => $parentContent->id, 'returnsingle' => true));
    	
    	//	abort by no structure by slug
    	if (!$structureContent) self::abort($slug);
    	
    	//	get sub structures by parent id
    	$subStructureContent = ($temp = $this->app['storage']->getContent('structures', array('parent' => $structureContent->id ))) ? $temp : [];

    	//	search content by parent id
    	$content = [];
    	$contenttypes = [];
    	$order = $this->app['request']->query->get('order');
    	foreach ($this->contenttypeslugs as $contenttypeslug ) {

    		if ($contenttypeslug != 'structures') {
    	
    			$contenttype = $this->app['storage']->getContentType($contenttypeslug);
    			
    			// 	structure mixed content#
    			//	todo: sorting with perojects and structures + pager problem
    			if ($subStructureContent) {

    				//$orderTest = ( substr($order, 0, 1) == '-' ) ?  substr($order, 1, strlen($order)) : $order;
    				//if (!isset($contenttype['fields'][$orderTest]) &&  $orderTest != 'datepublish') $order = null;
    				
    				$order = (!empty ($order) ? $contenttype['sort'] : $this->app['config']->get('general/listing_sort'));
    				$contentTypeContentRaw = $this->app['storage']->getContent($contenttypeslug, array('parents' => '%'. $structureContent->id . '%', 'order'=> $order));
					
    				if ($contentTypeContentRaw) {
    					foreach ($contentTypeContentRaw as $record)  {
    						if (array_search($structureContent->id, $record->values['parents']) !== false  ) {
    							array_push($content, $record);
    						}
    					}
    				}
    					
    				
    				/*
    				if ($contentTypeContentRaw) {
    					$contentTypeContent = [];
    					foreach ($contentTypeContentRaw as $record)  {
    						if (array_search($structureContent->id, $record->values['parents']) !== false  ) {
    							array_push($contentTypeContent, $record);
    						}
	    				}
    					
    					if ($contentTypeContent) {
    						echo $order;
	    					$ismerged = true;
	    					
	    					$content = array_merge($subStructureContent, $contentTypeContent);
	    					self::array_sort_by_column($content, $order);
	    					
	    					//$contentTypeContent = array_merge($subStructureContent, $contentTypeContent);
    					}
    				}
    				*/
    			}
    				
    			else {
    				
    				//	check contenttype for order field to be sure to contenttype have property
    				//$order = $this->app['request']->query->get('order');
    				$orderTest = ( substr($order, 0, 1) == '-' ) ?  substr($order, 1, strlen($order)) : $order;
    				if (!isset($contenttype['fields'][$orderTest]) &&  $orderTest != 'datepublish') $order = null;

    				//	get content by parents
    				$order = (!empty ($order) ? $order : (!empty($contenttype['sort']) ? $contenttype['sort'] : $this->app['config']->get('general/listing_sort')));
    				$page = $this->app['request']->query->get('page', 1);
    				$amount = (!empty($contenttype['listing_records']) ? $contenttype['listing_records'] : $this->app['config']->get('general/listing_records'));
    				$contentTypeContentRaw = $this->app['storage']->getContent($contenttypeslug, array('parents' => ' %'. $structureContent->id . '%', 'limit' => $amount,'order'=>$order, 'page' => $page ));
    				
    				//	parents are saved as string in array
    				//	"LIKE" searches string in array -> id 1 : ['11','1'] = 2 results;
    				//	no IN-clause possible? therefore refilter manually
    				$contentTypeContent = [];
					foreach ($contentTypeContentRaw as $record)  {
						if (array_search($structureContent->id, $record->values['parents']) !== false  ) {
							array_push($contentTypeContent, $record);
						}
					}
    			}
    			
    			if ($contentTypeContent) {
    				//	set contenttypes
    				$contenttypes[$contenttype['name']] = $contenttype;
    				//	merge current content with possibles other contenttype content
    				$content = array_merge($contentTypeContent, $content);
    			}
    		}
    	}
    	
    	//	merge page content with structure content
    	if ($subStructureContent) $content = array_merge($subStructureContent, $content);
    	
    	//	no structurecontent or pagecontent -> no page
    	if (!$structureContent && !$content)	self::abort($slug);
    	
    	// use parent structure template
    	//	overview, listing, subsite
    	$template = $structureContent->template();
    	
    	// Fallback: If file is not OK, show an error page
    	$filename = $this->app['paths']['themepath'] . "/" . $template;
    	if (!file_exists($filename) || !is_readable($filename)) {
    		$error = sprintf(
    				"No template for '%s' defined. Tried to use '%s/%s'.",
    				$content->getTitle(),
    				basename($this->app['config']->get('general/theme')),
    				$template
    		);
    		$this->app['log']->setValue('templateerror', $error);
    		$this->app->abort(404, $error);
    	}
    	

    	
    	// Setting the canonical path and the editlink.
    	//	todo:	define bolt links for structures
    	$this->app['canonicalpath'] = $structureContent->link();
    	$this->app['paths'] = getPaths($app);
    	
    	
    	
    	//todo: cleanup
    	if ($parentContent) {
    		$this->app['twig']->addGlobal('structure', $parentContent);
    	}
    	else {
    		$this->app['twig']->addGlobal('structure', $structureContent);
    	}
    	
    	$this->app['twig']->addGlobal('contenttype', end($contenttypes));
    	$this->app['twig']->addGlobal('structure', $structureContent);
    	$this->app['twig']->addGlobal('record', $structureContent);
    	$this->app['twig']->addGlobal('records', $content);
    	$this->app['twig']->addGlobal('parent', $this->app['session']->get('parents')[$structureContent->values['parent']]   );
    	
    	return $this->app['render']->render($template);
    }
    
    
    
    /**
     * 
     */
    private function abort($slug) 
    {

    		// There's one special edge-case we check for: if the request is for the backend, without trailing
    		// slash and it is intercepted by custom routing, we forward the client to that location.
    		if ($slug == trim($this->app['config']->get('general/branding/path'), "/")) {
    			simpleredirect($this->app['config']->get('general/branding/path') . "/");
    		}
    		
    		//	try to get related
    		//  $pageContent = $this->app['storage']->getContent('pages', array('slug' => $slug,'status'=> '!published', 'returnsingle' => true));
    		//  var_dump( $pageContent->taxonomy );
    		
    		$this->app->abort(404, "Page $contenttypeslug/$slug not found.");
    }
    
    
    
    /**
     * 
     */
    private function setStructuresToSession() 
    {
    	 
    	$structures = $this->app['storage']->getContent('structures');
    	$parents = array();
    	$structuresSlugs = array();
    	
    	//	build structure parent object
    	foreach ( $structures as $structure ) {
    		
    		$id = $structure->values['id'];
    		$p = array(
    			'path' => array(),
    			'structure' => array()
    		);
    		
    		array_push($structuresSlugs, $structure->values['slug'] );
    		$tempParents = self::getParents($structure, $structures, $p);
    		$parents[$id] = array(
    				'id'		=> $id,
    				'title'		=> $structure->values['title'],
    				'slug'		=> $structure->values['slug'],
    				'parentid'	=> $structure->values['parent'],
    				'parents' 	=> array_reverse($tempParents['structure'], true),
    				'path' 		=> $this->app['paths']['root'] . join('/',array_reverse($tempParents['path'], true)) . '/',
    				'testpath'	=> join('/', array_reverse($tempParents['path'], true) )
    		);
    		
			//	set subsite options
    		if (strpos($structure->values['template'],'subsite') !== false)
    			$parents[$id]['subsite'] =  array(
    				'subclass'	=> $structure->values['subclass'],
    				'footer'	=> $structure->relation['footer'][0],
    				'path'		=> $parents[$id]['path']
    		);
    		
    	}
    	
    	//	save to session
    	$this->app['session']->set('parents', $parents);
    	$this->app['session']->set('structuresslugs', $structuresSlugs);
    	 
    	return $parents;
    }
    
    
    private function getParents($structure, $structures, $p )
    {
    	//array_push($p, $structure->values['slug'] );
    	array_push($p['structure'], $structure->values );
    	array_push($p['path'], $structure->values['slug'] );
    
    	$parentId = $structure->values['parent'];
    	if ( $parentId && $parentId != $structure->id )
    		return self::getParents($structures[$structure->values['parent']], $structures, $p);
    	else
    		return $p;
    }
    
}

