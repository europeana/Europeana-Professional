<?php
/**
 * Bolt entry script
 *
 * Here we'll require in the first stage load script, which handles all the
 * tasks needed to return the app.  Once we get the app, we simply tell it
 * to run, building a beautiful web page for you and other visitors.
 */
 
 // Override hardcoded, because it can't be caught by Boltredirector..
if ($_SERVER['HTTP_HOST'] == "www.europeana-libraries.eu") {
    header("location: http://pro.europeana.eu/get-involved/projects/project-list/europeana-libraries");
    die();
}

/**
 * @var \Bolt\Application $app
 */
$app = require_once dirname(__FILE__) . '/app/load.php';

if ($app) {
    $app->run();
} else {
    return false;
}
