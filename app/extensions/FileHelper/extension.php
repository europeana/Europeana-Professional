<?php
// File info Extension for Bolt

namespace FileHelper;

use Bolt\BaseExtension as BoltExtension;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Extension extends BoltExtension
{
    public function info()
    {

        $data = array(
            'name' =>"FileInfo",
            'description' => "An extension to enable file functions.",
            'author' => "Patrick Tettenborn",
            'link' => "http://nexum.de",
            'version' => "1.0",
            'required_bolt_version' => "1.0",
            'highest_bolt_version' => "1.0",
            'type' => "Twig function",
            'first_releasedate' => "2014-09-16",
            'latest_releasedate' => "2013-08-16",
        	'priority' => 10,
        );

        return $data;

    }

    public function initialize()
    {
    	
        //	POST listing for download
        $this->app->post('/download/', array($this, 'downloadHandler'))
        ->bind('downloadHandler');
		
        $this->addTwigFunction('fileInfo', 'fileInfo');
        $this->addTwigFunction('fileDownloadAction', 'fileDownloadAction');
        
        
        $this->absFilePath = $this->app['paths']['filespath'] . '/';
        $this->downloadName = 'targetfile';
    }
    
    
    public function fileInfo($file = null)
    {
    	
    	$filePath = $this->absFilePath . $file['filename'];
    	
    	$fileInfo = array(
    			'filename' => $this->fileName($filePath),
    			'filesize' => $this->fileSize($filePath),
    			'filetype' => $this->fileType($filePath),
    			'filedate' => $this->fileLastModified($filePath)
    	);
    	
    	return $fileInfo;
    }
    
    
    public function fileDownloadAction()
    {
    	
    	$formAction = sprintf('action="%s" method="post"', $this->app['paths']['root'] . 'download/' ); 
    	
    	return  new \Twig_Markup($formAction, 'UTF-8'); ;
    }
    
    public function downloadHandler(Request $request)
    {
    	$target = $request->request->get('downloadfile');
    	
    	$filePath = $this->absFilePath . $target;
    	
    	// 	get mime-type
    	$finfo = finfo_open(FILEINFO_MIME_TYPE);
    	$type = finfo_file($finfo, $filePath);
    	finfo_close($finfo);

    	//	send file
    	return $this->app->sendFile($filePath, 200, array('Content-type' => $type), 'attachment');
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






