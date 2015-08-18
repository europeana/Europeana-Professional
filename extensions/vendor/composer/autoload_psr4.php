<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'FileBrowser\\' => array($vendorDir . '/europeana/filebrowser'),
    'Disqus\\' => array($vendorDir . '/bolt/disqus'),
    'Bolt\\Extension\\FoundryCode\\' => array($vendorDir . '/foundrycode/boltredirector'),
    'Bolt\\Extension\\Europeana\\StructureTree\\' => array($baseDir . '/local/europeana/structure-tree'),
    'Bolt\\Extension\\Europeana\\GoogleSearch\\' => array($baseDir . '/local/europeana/google-search'),
    'Bolt\\Extension\\Europeana\\FrontendExt\\' => array($baseDir . '/local/europeana/frontendext'),
    'Bolt\\Extension\\Europeana\\FileHelper\\' => array($baseDir . '/local/europeana/file-helper'),
    'Bolt\\Extension\\Bolt\\Sitemap\\' => array($vendorDir . '/bolt/sitemap'),
    'Bolt\\Extension\\Bolt\\RSSFeed\\' => array($vendorDir . '/bolt/rssfeed', $vendorDir . '/bolt/rssfeed/src'),
    'Bolt\\Extension\\Bolt\\RSSAggregator\\' => array($baseDir . '/local/europeana/rssaggregator'),
    'Bolt\\Composer\\' => array($baseDir . '/'),
);
