<?php
// File info Extension for Bolt

namespace FileInfo;

use Bolt\BaseExtension as BoltExtension;

class Extension extends BoltExtension
{
    public function info()
    {

        $data = array(
            'name' =>"FileInfo",
            'description' => "An extension to enable file info twig functions.",
            'author' => "Patrick Tettenborn",
            'link' => "http://tetten.com",
            'version' => "1.0",
            'required_bolt_version' => "1.0",
            'highest_bolt_version' => "1.0",
            'type' => "Twig function",
            'first_releasedate' => "2014-08-25",
            'latest_releasedate' => "2013-08-25",
        );

        return $data;

    }

    public function initialize()
    {
    	
        $this->addTwigFunction('fileinfo', 'fileInfo');
    }
    
    
    public function fileInfo($file)
    {
    	
    	$filePath = $this->app['paths']['filespath'] . '/' . $file['filename'];
    	
    	$fileInfo = array(
    		'filename' => $this->fileName($filePath),
    		'filesize' => $this->fileSize($filePath),
    		'filetype' => $this->fileType($filePath),
    		'filedate' => $this->fileLastModified($filePath)
    	);
    	
    	return $fileInfo;
    }
    
    
    private function fileName($filePath)
    {
    	$filename = pathinfo($filePath)['basename'];
    	return $filename;
    }
    
    
    private function fileSize($filePath)
    {
    	
    	$decimals = $this->config['decimal'];
    	$bytes = filesize($filePath);
    	$sz = 'BKMGTP';
    	$factor = floor((strlen($bytes) - 1) / 3);

    	$filesize = sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor] . 'B';
		return $filesize;
    }
    
    private function fileType($filePath)
    {
    	$filetype = pathinfo($filePath)['extension'];
    	return $filetype;
    }
    
    
	private	function fileLastModified($filePath) 
	{
		$format = $this->config['date'];	
		$filedate = date($format, filemtime($filePath));
		return $filedate;
	}    

	
}






