<?php

namespace Bolt\Extension\Europeana\ZohoImport;

// yes autocomplete
$path = __DIR__.'/src/TypeConverter/TypeConverter.php';
require_once($path);

$console = __DIR__.'/src/Console/Console.php';
require_once($console);

$app['extensions']->register(new Extension($app));
