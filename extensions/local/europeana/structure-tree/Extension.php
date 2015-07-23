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

        // structure tree overview
        $this->boltPath = $this->app['config']->get('general/branding/path');
        $this->addMenuOption(\Bolt\Translation\Translator::__('Structure Tree'), "$this->boltPath/structure-tree/overview", "fa:sitemap");
        $this->app->get("$this->boltPath/structure-tree/overview", array($this, 'structureTreeOverview'))
            ->bind('structureTreeOverview');

        // convert legacy relationships to column values in contenttypes.
        $this->app->get("$this->boltPath/structure-tree/convert", array($this, 'structureTreeConvert'))
            ->bind('structureTreeConvert');

        // listings

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
        $this->addTwigFunction('getTreeChildren', 'getTreeChildren');

        $this->contenttypeslugs = $this->config['contenttypes'];
    }

    private function loadLinks() {
        if ($this->linksLoaded) {
            return;
        }

        // TODO: in new Bolt version use getContenttypeTablename instead of getTablename.
        $tableStructures = $this->app['storage']->getTablename('structures');
        $structures = $this->app['db']->fetchAll("SELECT id FROM $tableStructures WHERE status = 'published'");
        $availableStructures = util::array_pluck($structures, 'id');

        $contenttypes = $this->app['config']->get('contenttypes');
        foreach ($contenttypes as $contenttype) {
            if (isset($contenttype['fields']['structure_parent'])) {

                $contenttypeslug = $contenttype['slug'];
                $tablename = $this->app['storage']->getTablename($contenttypeslug);

                $stmt = $this->app['db']->prepare("SELECT id, structure_parent FROM $tablename");
                $res = $stmt->execute();

                while ($row = $stmt->fetch()) {
                    $id = intval($row['id']);
                    $parent = intval($row['structure_parent']);

                    // The $parent is only relevant if it exists and is published.
                    if (in_array($parent, $availableStructures)) {
                        $this->treeParents[$contenttypeslug][$id] = $parent;
                        $this->treeChildren[$parent][] = "$contenttypeslug/$id";
                    }
                }
            }
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

        // $slug = \Bolt\Helpers\String::slug($slug, -1);
        $slug = $this->app['slugify']->slugify($slug);

        $contenttype = $this->getContenttypeBySlug($slug, true);

        $frontend = new Bolt\Controllers\Frontend();

        return $frontend->record($this->app , $contenttype, $slug);
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

        $frontend = new Bolt\Controllers\Frontend();

        return $frontend->record($this->app , $contenttype, $slug);

    }

    /**
     * Dump the whole structure tree, useful for debugging purposes.
     */
    public function structureTreeOverview() {
        $this->requireUserPermission('structure-tree');
        if (!$this->app['users']->isAllowed('structure-tree')) {
            return Lib::redirect('dashboard');
        }


        $this->app['htmlsnippets'] = true;
        $this->app['twig.loader.filesystem']->addPath(dirname(__FILE__) . '/assets');

        $bolt_structures = $this->app['config']->get('general/database/prefix') . 'structures';
        $roots = $this->app['db']->fetchAll("SELECT `id` FROM `$bolt_structures` WHERE `structure_parent` = '' OR `structure_parent` = '0'");
        $roots = array_map(function ($element) {return $element['id'];}, $roots);

        $data = array(
            'roots' => $roots,
        );

        $html = $this->app['render']->render('overview.twig', $data);
        return new \Twig_Markup($html, 'UTF-8');
    }

    /**
     * Convert legacy relationships to select field values.
     *
     * 1. Add to all contenttypes in `contenttypes.yml` the following field:
     *     structure_parent:
     *       type: select
     *       values: structures/id,title
     *       autocomplete: true
     *       label: "Select structure tree parent"
     *
     * 2. Run this query at /bolt/structure-tree/convert
     *
     * 3. remove all elements from `bolt_relations` WHERE `from_contenttype` = 'structures' AND `to_contenttype` = 'structures'
     *    -> can't just delete `to_contenttype` = 'structures', because this messes with other relationships.
     *
     */
    public function structureTreeConvert() {
        $this->requireUserPermission('structure-tree');
        if (!$this->app['users']->isAllowed('structure-tree')) {
            return Lib::redirect('dashboard');
        }

        $bolt_relations = $this->app['config']->get('general/database/prefix') . 'relations';
        $results = $this->app['db']->fetchAll("SELECT * FROM  `$bolt_relations` WHERE  `to_contenttype` = 'structures' ORDER BY `from_contenttype` ASC LIMIT 0, 10000");

        foreach($results as $result) {
            $tablename = $this->app['config']->get('general/database/prefix') . $result['from_contenttype'];
            $id = $result['from_id'];
            $parent = $result['to_id'];

            $this->app['db']->executeUpdate("UPDATE $tablename SET structure_parent = ? WHERE id = ?", array($parent, $id));
        }

        return 'ok';
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
        if (is_array($record)) {
            $record = $this->app['storage']->getContent($record['link']);
        }
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
        if (is_array($record)) {
            $record = $this->app['storage']->getContent($record['link']);
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
        else if ($record != false ) {
            return $record->link();
        } else {
            return;
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
        if (isset($record['subclass']) && $record['subclass'] !== 'none') {
            return $record;
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
            if (is_array($sortby)) {
                foreach ($sortby as $s) {
                    if ($a[$s] != $b[$s])
                        return $a[$s] > $b[$s];
                }
                return false;
            }
            else {
                return $a[$sortby] > $b[$sortby];
            }
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


    public function getTreeChildren($record)
    {
        if ($record->contenttype['slug'] !== 'structures') {
            return array();
        }
        $childSlugs = $this->getTreeChildIDs($record->id);
        $children = array();
        if (!empty($childSlugs)) {
            foreach ($childSlugs as $childSlug) {
                $child = $this->app['storage']->getContent($childSlug);
                if ($child) {
                    $children[] = $child;
                }
            }
        }
        return $children;
    }

    /**
     * Render a template while wrapping Twig_Error_Loader in 404
     * in case the template is not found by Twig.
     *
     * @param \Silex\Application $app
     * @param string             $template Ex: 'listing.twig'
     * @param string             $title    '%s' in "No template for '%s' defined."
     *
     * @return mixed Rendered template
     */
    public function render(Silex\Application $app, $template, $title)
    {
        try {
            return $app['twig']->render($template);
        } catch (\Twig_Error_Loader $e) {
            $error = sprintf(
                'Rendering %s failed: %s',
                $title,
                $e->getMessage()
            );

            // Log it
            $app['logger.system']->error($error, array('event' => 'twig'));

            // Set the template error
            $this->setTemplateError($app, $error);

            // Abort ship
            $app->abort(Response::HTTP_INTERNAL_SERVER_ERROR, $error);
        }
    }

}
