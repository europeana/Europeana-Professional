<?php

namespace Bolt\Extension\Europeana\StructureTree;

use Silex;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;
use Bolt;
use Bolt\StorageEvents;
use Bolt\Extensions\Snippets\Location as SnippetLocation;
use \utilphp\util;

class Extension extends \Bolt\BaseExtension
{

    private $treeParents = array();
    private $treeChildren = array();
    private $cachedStructures = array();
    private $linksLoaded = false;

    public function initialize()
    {
        // For europeana, stupid hardcoded redirect for a domain:
        if (strpos($_SERVER['HTTP_HOST'], "europeanacreative.eu") !== false) {
            \Bolt\Library::simpleredirect('http://pro.europeana.eu/get-involved/projects/project-list/europeana-creative');
            die();
        }

        // listings

        // sitemap
        $this->app->match("/sitemap", array($this, 'htmlSitemap'));
        $this->app->match("/sitemap.xml", array($this, 'xmlSitemap'));

        // slug listing
        $this->app->match("/{slug}", array($this, 'slugTreeRecord'))
            ->assert('slug', '[a-zA-Z0-9_\-]+[^(sitemap)^(search)]')
            ->bind('slugTreeRecord');

        // strucutureslug / slug listing
        $this->app->match("/{structureSlugs}/{slug}", array($this, 'structureTreeRecord'))
            ->assert('structureSlugs', '(?!(async|_profiler)).*')
            ->assert('slug', '[a-zA-Z0-9_\-]+')
            ->bind('structureTreeRecord');

        // twig functions
        $this->addTwigFunction('structurelink', 'getStructureLink');
        $this->addTwigFunction('structurecontenttype', 'getContenttypeByStructure');
        $this->addTwigFunction('breadcrumb', 'breadCrumb');
        $this->addTwigFunction('subsite', 'subSite');
        $this->addTwigFunction('sortRecords', 'sortObject');
        $this->addTwigFunction('getContenttype', 'getContenttype');

        $this->contenttypeslugs = $this->config['contenttypes'];
    }

    private function loadLinks() {
        if ($this->linksLoaded) {
            return;
        }
        $tablename = $this->app['config']->get('general/database/prefix') . 'relations';
        $stmt = $this->app['db']->prepare("SELECT from_contenttype, from_id, to_id FROM $tablename WHERE to_contenttype = 'structures'");
        $res = $stmt->execute();
        while ($row = $stmt->fetch()) {
            $contenttype = $row['from_contenttype'];
            $from = intval($row['from_id']);
            $to = intval($row['to_id']);

            $this->treeParents[$contenttype][$from] = $to;
            $this->treeChildren[$to][] = "$contenttype/$from";
        }
        $this->linksLoaded = true;
    }

    private function getTreeParentID($contenttype, $id) {
        $this->loadLinks();
        if (isset($this->treeParents[$contenttype][$id])) {
            return $this->treeParents[$contenttype][$id];
        }
        return false;
    }

    private function getTreeChildIDs($id) {
        $this->loadLinks();
        if (isset($this->treeChildren[$id])) {
            return $this->treeChildren[$id];
        }
        return false;
    }

    public function slugTreeRecord($slug) {
        // Add snippets, since this is a Frontend route.
        $this->app['htmlsnippets'] = true;

        $slug = \Bolt\Helpers\String::slug($slug, -1);

        $contenttype = $this->getContenttypeBySlug($slug, true);
        return Bolt\Controllers\Frontend::record($this->app , $contenttype, $slug);
    }

    /**
     * handles structure request
     *
     * @param (string) structure slug
     * @param (string) slug
     */
    public function structureTreeRecord($structureSlugs, $slug) {
        // Add snippets, since this is a Frontend route.
        $this->app['htmlsnippets'] = true;

        $contenttype = $this->getContenttypeBySlug($slug);
        return Bolt\Controllers\Frontend::record($this->app , $contenttype, $slug);
    }

    /**
     * Find first content record with the given slug.
     */
    public function getContentBySlug($slug, $preferStructure = false) {
        $contenttypeslugs = $this->contenttypeslugs;
        if ($preferStructure) {
            array_unshift($contenttypeslugs, 'structures');
        }
        foreach ($contenttypeslugs as $contenttypeslug ) {
            $content = $this->app['storage']->getContent($contenttypeslug, array('slug' => $slug, returnsingle => true));
            if ($content) {
                return $content;
            }
        }
        return null;
    }

    /**
     * Find first contenttype that contains a record with the given slug.
     */
    public function getContenttypeBySlug($slug, $preferStructure = false) {
        $content = $this->getContentBySlug($slug, $preferStructure);
        if ($content) {
            return $content->contenttype['slug'];
        }
        else {
            return false;
        }
    }

    public function getContenttype($slug) {
        return $this->app['storage']->getContentType($slug);
    }

    /**
     * Search contenttype by structure slug
     *
     * @param string
     * @return void
     */
    public function getContenttypeByStructure($structureSlug) {
        $structure = $this->app['storage']->getContent('structures/' . $structureSlug);
        foreach ($this->contenttypeslugs as $contenttypeslug) {
            $content = $structure->related($contenttypeslug);

            if ($content) {
                return $this->app['storage']->getContentType($contenttypeslug);
            }
        }
        return null;
    }

    private function getParentStructure($record)
    {
        $contenttype = $record->contenttype;
        $id = $this->getTreeParentID($contenttype['slug'], $record->id);

        if (!$id) {
            return null;
        }

        if (array_key_exists($id, $this->cachedStructures)) {
            return $this->cachedStructures[$id];
        }
        else {
            $structure = $this->app['storage']->getContent('structures/' . $id);
            $this->cachedStructures[$id] = $structure;
            return $structure;
        }
    }


    /**
     * Generate contentlink for structure-bound records
     * contenttypes can can belong to more than one stucture.
     * If no parent is set return default link.
     */
    public function getStructureLink($record, $recursing = false)
    {
        if (!$record) {
            return false;
        }
        $structure = $this->getParentStructure($record);
        $selfSlug = $record['slug'];
        if ($structure) {
            $parentLink = $this->getStructureLink($structure, true);
            return "$parentLink/$selfSlug";
        }
        else if ($record->contenttype['slug'] === 'structures') {
            return "/$selfSlug";
        }
        else {
            return "/" . $record->link();
        }
    }

    private function abort($slug)
    {
        // There's one special edge-case we check for: if the request is for the backend, without trailing
        // slash and it is intercepted by custom routing, we forward the client to that location.
        if ($slug == trim($this->app['config']->get('general/branding/path'), "/")) {
            simpleredirect($this->app['config']->get('general/branding/path') . "/");
        }

        $this->app->abort(404, "Page $contenttypeslug/$slug not found.");
    }

    /**
     * Search subsite in parents by parentid
     * @param $record (object)
     * @return $parent (object)
     */
    public function subSite($record)
    {
        if (!$record) {
            return null;
        }
        if ($record['subsite']) {
            return $record['subsite'];
        }
        else {
            $parent = $this->getParentStructure($record);
            return $this->subSite($parent);
        }
    }

    /**
     * build breadcrumb
     * @return (array) breadcumb
     */
    public function breadCrumb($record) {
        $structure = $this->getParentStructure($record);

        if ($structure) {
            $breadcrumbs = $this->breadCrumb($structure);
        }
        else {
            $breadcrumbs = array();
        }
        $breadcrumbs[] = array(
            'title' => $record['title'],
            'path' => $this->getStructureLink($record));
        return $breadcrumbs;
    }

    public function sortObject($records, $sortby)
    {
        $callbackArraySort = function($a, $b) use ($sortby) {
            return strcmp($a->{($sortby)}, $b->{($sortby)});
        };

        usort($records, $callbackArraySort);

        return $records;
    }

    private function getParents($structure, $structures, $p )
    {
        array_push($p['structure'], $structure->values );
        array_push($p['path'], $structure->values['slug'] );

        $parentId = $structure->values['parent'];
        $parentSlug = $structure->group['slug'];

        if ( $structure->group['slug'] != "" ) {
            return $this->getParents( $this->getStructureBySlug($parentSlug, $structures), $structures, $p);
        }
        else {
            return $p;
        }
    }

    private function getStructureBySlug($slug, $structures)
    {
        foreach ($structures as $structure) {
            if ($structure->values['slug'] == $slug)
                return $structure;
        }

        return 0;
    }


    /**
     * xml sitemap listing
     */
    public function xmlSitemap()
    {
        $this->app['extensions']->clearSnippetQueue();
        $this->app['extensions']->disableJquery();
        $this->app['debugbar'] = false;

        $headers['Content-Type'] = 'application/xml; charset=utf-8';
        return $this->serveSitemap($this->config['sitemap']['xml_template'], $headers);
    }

    public function htmlSitemap()
    {
        return $this->serveSitemap($this->config['sitemap']['template'], array());
    }

    private function serveSitemap($template, $headers)
    {
        $sitemap = $this->collectSitemapData();

        $this->app['twig.loader.filesystem']->addPath(__DIR__);
        $body = $this->app['render']->render($template, array(
                    'entries' => $sitemap,
                    'title' => 'Sitemap'
                    ));

        return new Response($body, 200, $headers);
    }


    private function collectSitemapData() {
        $sitemap = [];
        $pages = [];
        $sources = $this->config['sitemap']['sources'];
        $contenttypes = $this->config['sitemap']['contenttypes'];

        // get content
        foreach ($contenttypes as $contenttype ) {
            $pages = array_merge($pages, $this->app['storage']->getContent($contenttype));
        }

        // get sitemap sources
        foreach ($sources as $source) {
            $item = [];

            // entry type 'menu'
            if ($source['type'] == 'menu') {
                $menu = $this->app['config']->get('menu/'.$source['data']['menu']);

                foreach ($menu as $entry) {
                    $slug = util::slugify($entry['path'], -1);
                    $itemRaw = $this->app['storage']->getContent('structures', array('slug' => $slug, 'returnsingle' => true));
                    $item = $itemRaw->values;
                    $childsUnsorted = $this->getSitemapChildren($itemRaw);
                    $item['children'] = $this->sortObject($childsUnsorted, 'sortorder');
                    $item['link'] = $this->app['paths']['root'] . $item['slug'];
                    $item['source'] = "menu:{$entry['path']}";
                    array_push($sitemap, $item);
                }
            }
            // entry type 'list'
            elseif ($source['type'] == 'list') {
                $itemRoot = [];
                $itemRoot['title'] = $source['label'];
                $itemRoot['children'] = [];
                $itemRoot['source'] = "list:{$source['label']}";

                foreach ($source['data'] as $entry) {
                    // get link entries
                    if ($entry['link']) {
                        $item = array('title'=> $entry['label'], 'link' => $entry['link']);
                        $item['source'] = "list:{$source['label']}:{$entry['label']}";
                        array_push($itemRoot['children'], $item);
                    }
                    // get slug entries
                    elseif ($entry['slug']) {
                        $slug = util::slugify($entry['slug'], -1);
                        $itemRaw = null;
                        foreach ($contenttypes as $contenttype ) {
                            $itemRaw = $this->app['storage']->getContent($contenttype, array('slug' => $slug, 'returnsingle' => true));
                            if ($itemRaw) {
                                break;
                            }
                        }
                        if (!$itemRaw) {
                            // skip: item doesn't exist
                            continue;
                        }
                        $item = $itemRaw->values;
                        $item['link'] = $this->app['paths']['root'] . $item['slug'];
                        $item['children'] = $this->getSitemapChildren($itemRaw);
                        $item['source'] = "list:{$source['label']}:{$entry['label']}";
                        array_push($itemRoot['children'], $item);
                    }
                }
                array_push($sitemap, $itemRoot);
            }
        }

        return $sitemap;
    }

    public function getTreeChildren($record)
    {
        if ($record->contenttype['slug'] !== 'structures') {
            return array();
        }
        $childSlugs = $this->getTreeChildIDs($record->id);
        $children = array();
        foreach ($childSlugs as $childSlug) {
            $children[] = $this->app['storage']->getContent($childSlug);
        }
        return $children;
    }

    private function getSitemapChildren($parent, $depth = 1)
    {

        if ($depth > 5) {
            return false;
        }

        $p = array();

        foreach ($this->getTreeChildren($parent) as $page) {
            $item = $page->values;
            $item['link'] = $this->getStructureLink($page);
            $item['children'] = $this->getSitemapChildren($page, $depth+1 );
            $p[] = $item;
        }

        return $p;
    }
}
