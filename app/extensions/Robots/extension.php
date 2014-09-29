<?php

namespace Robots;

use Silex;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class Extension extends \Bolt\BaseExtension
{

    public function info()
    {
        return array(
            'name' => "Robots",
            'description' => "robots.txt ",
            'author' => "Patrick Tettenborn",
            'link' => "http://nexum.de",
            'version' => "0.1",
            'required_bolt_version' => null,
            'highest_bolt_version' => null,
            'type' => "General",
            'first_releasedate' => null,
            'latest_releasedate' => null,
            //'priority' => 10
        );
         
    }

    
    public function initialize()
    {
    	
    	//	listing
    	$this->app->match("/robots.txt", array($this, 'robots'));
    	
    }
    
    
    
	/**
	 * 	robots response
	 * 
	 * 	@return (Response) robots.txt
	 */    
    public function robots()
    {
    	$this->app['extensions']->clearSnippetQueue();
    	$this->app['extensions']->disableJquery();
    	$this->app['debugbar'] = false;
    	
    	$headers['Content-Type'] = 'text/plain; charset=utf-8';
    	$body = '';
    	
    	$rules = $this->config['rules'];
    	foreach($rules as $rule ) {
    		foreach($rule as $key => $val ) {
    			$entry = (is_array($val)) ? join("\n".$key.': ', $val) : $val;
    			$body .= $key . ': ' . $entry . "\n";
    		}
    	} 

    	return new Response($body, 200, $headers);
    }
    
}

