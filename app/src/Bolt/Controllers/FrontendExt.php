<?php

namespace Bolt\Controllers;

use Silex;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Experimental Frontend actions
 *
 */
class FrontendExt
{
	
	// 	copy of the default listing controller. 
	//	add GET param "order" to sort records
	public static function sortlisting(Silex\Application $app, $contenttypeslug)
	{
	
		$contenttype = $app['storage']->getContentType($contenttypeslug);
	
		// First, get some content
		$page = $app['request']->query->get('page', 1);
		$order = $app['request']->query->get('order');
		$amount = (!empty($contenttype['listing_records']) ? $contenttype['listing_records'] : $app['config']->get('general/listing_records'));
		$order = (!empty ($order) ? $order : (!empty($contenttype['sort']) ? $contenttype['sort'] : $app['config']->get('general/listing_sort')));
		$content = $app['storage']->getContent($contenttype['slug'], array('limit' => $amount, 'order' => $order, 'page' => $page));
	
		// We do _not_ abort when there's no content. Instead, we handle this in the template:
		// {% for record in records %} .. {% else %} no records! {% endif %}
		// if (!$content) {
		//     $app->abort(404, "Content for '$contenttypeslug' not found.");
		// }
	
		// Then, select which template to use, based on our 'cascading templates rules'
		if (!empty($contenttype['listing_template'])) {
			$template = $contenttype['listing_template'];
			$chosen = "contenttype";
		} else {
			$filename = $app['paths']['themepath'] . "/" . $contenttype['slug'] . ".twig";
			if (file_exists($filename) && is_readable($filename)) {
				$template = $contenttype['slug'] . ".twig";
				$chosen = "slug";
			} else {
				$template = $app['config']->get('general/listing_template');
				$chosen = "config";
	
			}
		}
	
		$app['log']->setValue('templatechosen', $app['config']->get('general/theme') . "/$template ($chosen)");
	
		// Fallback: If file is not OK, show an error page
		$filename = $app['paths']['themepath'] . "/" . $template;
		if (!file_exists($filename) || !is_readable($filename)) {
			$error = sprintf(
					"No template for '%s'-listing defined. Tried to use '%s/%s'.",
					$contenttypeslug,
					basename($app['config']->get('general/theme')),
					$template
			);
			$app['log']->setValue('templateerror', $error);
			$app->abort(404, $error);
		}
	
		// Make sure we can also access it as {{ pages }} for pages, etc. We set these in the global scope,
		// So that they're also available in menu's and templates rendered by extensions.
		$app['twig']->addGlobal('records', $content);
		$app['twig']->addGlobal($contenttype['slug'], $content);
		$app['twig']->addGlobal('contenttype', $contenttype['name']);
		
		return $app['render']->render($template);
	
	}
	
}
