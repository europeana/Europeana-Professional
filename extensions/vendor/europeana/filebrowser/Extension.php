<?php
/**
 * A file browser extension that exposes Bolt's /files directory to the front-end,
 * implementing a file-manager-like UI in the front-end.
 *
 * @author Tobias Dammers <tobias@twokings.nl>
 */

namespace FileBrowser;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;

class Extension extends \Bolt\BaseExtension
{
    public function info()
    {
        return array(
            'name' => "FileBrowser",
            'description' => "Exposes /files on the front-end",
            'author' => "Tobias Dammers",
            'link' => "http://bolt.cm",
            'version' => "0.1",
            'required_bolt_version' => "1.6.0",
            'type' => "General",
            'first_releasedate' => null,
            'latest_releasedate' => null,
            'priority' => 10
        );
    }

    public function initialize()
    {
        $this->configPathSearchReplace = array(
                '%self%' => dirname(__FILE__),
                '%assets%' => $this->app['paths']['extensions'] . "vendor/europeana/filebrowser/assets",
                '%theme%' => preg_replace('#/$#', '', $this->app['paths']['themepath']),
            );

        $this->iconMapping = array(
            '@dir' => 'folder.svg',
            '@up' => 'folder_up.svg',
            '@default' => 'document.svg',
        );
        if (isset($this->config['icons']['mapping'])) {
            $this->iconMapping = array_merge($this->iconMapping, $this->config['icons']['mapping']);
        }
        if (isset($this->config['icons']['path'])) {
            $path = $this->config['icons']['path'];
        }
        else {
            $path = '%assets%/icons';
        }
        $this->iconsPath = $this->expandConfigPath($path);
        $this->configPathSearchReplace['%icons%'] = $this->iconsPath;

        $this->addJquery();
        $this->app['extensions']->addJavascript($this->expandConfigPath("%assets%/file_browser.js"), false);
        $cssFiles = isset($this->config['stylesheets']) ? $this->config['stylesheets'] : null;
        if (is_array($cssFiles)) {
            foreach ($cssFiles as $cssFile) {
                $this->app['extensions']->addCSS($this->expandConfigPath($cssFile), false);
            }
        }
        else {
            $this->app['extensions']->addCSS($this->expandConfigPath("%assets%/file_browser.css"), false);
        }
        $this->app->get("/async/file_browser", array($this, "asyncGetFiles"))->bind("file_browser_get");
        $this->addTwigFunction('file_browser', 'twigFileBrowser');
        $this->addTwigFunction('file_browser_icon', 'twigFileBrowserIcon');

    }

    private function getAllowedModes() {
        if (isset($this->config['modes'])) {
            return $this->config['modes'];
        }
        else {
            return array('list', 'icons');
        }
    }

    private function validateMode($mode) {
        $allowedModes = $this->getAllowedModes();
        if (!in_array($mode, $allowedModes)) {
            $imploded = implode(', ', $allowedModes);
            throw new \Exception("Invalid mode: $mode, allowed modes are: $imploded");
        }
    }

    private function listFiles($rootPath, $currentPath) {
        $path = '';
        if (!empty($rootPath)) {
            $path .= "$rootPath/";
        }
        if (!empty($currentPath)) {
            $path .= "$currentPath/";
        }
        $finder = new Finder();
        $extensionRegex = '/^[^\.]*$|\\.' . implode('|',
            array_map('preg_quote',
                $this->app['config']->get('general/accept_file_types'))) . '$/';
        $rootDir = $this->app['paths']['filespath'] . "/$path";
        if (!is_dir($rootDir)) {
            return array();
        }
        $files =
            $finder
                ->depth('== 0')
                ->name($extensionRegex)
                ->notName('*.exe')
                ->notName('*.php')
                ->notName('*.html')
                ->notName('*.js')
                ->sortByName()
                ->sortByType()
                ->in($rootDir);
        return iterator_to_array($files);
    }

    private function splitPath($path) {
        $f = function($part) {
            // No whitespace around components
            $part = trim($part);
            // No empty components
            if (empty($part)) {
                return false;
            }
            // No hidden components
            if ($part[0] === '.') {
                return false;
            }
            return true;
        };
        return array_filter(explode('/', $path), $f);
    }

    private function getIconsPath() {
        return $this->iconsPath;
    }

    private function getContext($mode, $rootPath, $currentPath) {
        $paths = $this->sanitizePaths($rootPath, $currentPath);
        list($rootPath, $currentPath, $upPath) = array_values($paths);
        $iconsPath = $this->getIconsPath();

        $title = (isset($this->config['title']) ? $this->config['title'] : '');

        return array(
            'mode' => $mode,
            'allowedModes' => $this->getAllowedModes(),
            'paths' => $paths,
            'icons' => $iconsPath,
            'title' => $title,
            'files' => $this->listFiles($rootPath, $currentPath));
    }

    private function sanitizePaths($rootPath = '', $currentPath = '') {
        $rootPP = $this->splitPath($rootPath);
        $currentPP = $this->splitPath($currentPath);
        if (count($currentPP)) {
            $upPP = $currentPP;
            array_pop($upPP);
        }
        else {
            $upPP = null;
        }

        return array(
            'root' => implode('/', $rootPP),
            'current' => implode('/', $currentPP),
            'up' => ($upPP === null) ? null : implode('/', $upPP),
        );
    }

    public function asyncGetFiles(Request $request) {
        $allowedModes = $this->getAllowedModes();
        $defaultMode = reset($allowedModes);
        $mode = ($request->get('fb_mode') ? $request->get('fb_mode') : $defaultMode);
        $this->validateMode($mode);
        $rootPath = ($request->get('fb_root') ? $request->get('fb_root') : '');
        $currentPath = ($request->get('fb_cp') ? $request->get('fb_cp') : '');

        $context = $this->getContext($mode, $rootPath, $currentPath);
        return $this->render("list.twig", $context);
    }

    public function twigFileBrowser($params)
    {
        $mode = (isset($params['mode']) ? $params['mode'] : null);
        $rootPath = (isset($params['root']) ? $params['root'] : '');
        $currentPath = (isset($params['currentpath']) ? $params['currentpath'] : '');

        $allowedModes = $this->getAllowedModes();
        $defaultMode = reset($allowedModes);
        if ($mode === null) {
            $mode = $defaultMode;
        }
        $fbmode = $this->app['request']->get('fb_mode');
        if (!empty($fbmode)) {
            $mode = $fbmode;
        }
        $this->validateMode($mode);
        $fbcp = $this->app['request']->get('fb_cp');
        if (!empty($fbcp)) {
            $currentPath = $fbcp;
        }
        $context = $this->getContext($mode, $rootPath, $currentPath);
        $inner = $this->render("list.twig", $context);
        $context['inner'] = $inner;
        return new \Twig_Markup($this->render("container.twig", $context), 'UTF-8');
    }

    public function twigFileBrowserIcon($extension) {
        if (isset($this->iconMapping[$extension])) {
            $basename = $this->iconMapping[$extension];
        }
        else {
            $basename = $this->iconMapping['@default'];
        }
        return $this->getIconsPath() . '/' . $basename;
    }

    private function expandConfigPath($path) {
        $search = array_keys($this->configPathSearchReplace);
        $replace = array_values($this->configPathSearchReplace);
        return str_replace($search, $replace, $path);
    }

    private function render($template, $data) {
        if (isset($this->config['templates'])) {
            $templatesPaths = $this->config['templates'];
        }
        else {
            $templatesPaths = null;
        }
        if (is_null($templatesPaths)) {
            $templatesPaths = array('%self%/templates');
        }
        elseif (!is_array($templatesPaths)) {
            $templatesPaths = array($templatesPaths);
        }
        foreach ($templatesPaths as $templatesPath) {
            $templatesPath = $this->expandConfigPath($templatesPath);
            if (file_exists($templatesPath)) {
                $this->app['twig.loader.filesystem']->addPath($templatesPath);
            }
        }
        return new \Twig_Markup($this->app['render']->render($template, $data), 'UTF-8');
    }

}

