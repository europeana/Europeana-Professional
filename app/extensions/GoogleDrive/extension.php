<?php

namespace GoogleDrive;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

// load helper classes for google drive
require_once 'src/Drive_Util.php';
require_once 'src/Drive_Html.php';
require_once 'src/Logger.php';

class Extension extends \Bolt\BaseExtension
#class Extension extends \Bolt\Controllers\Backend
{
	private $redirectUrl;
	private $logger;
	

	
	
    /**
     * Info block for Google Drive Extension.
     */
    function info()
    {
        $data = array(
            'name' => "GoogleDrive",
            'description' => "Connection to google drive",
            'author' => "Alexander Linn",
            'link' => "http://www.nexum.de",
            'version' => "1.0",
            'required_bolt_version' => "1.4",
            'highest_bolt_version' => "1.4",
            'type' => "Import",
            'first_releasedate' => "2014-07-17",
            'latest_releasedate' => "2014-07-18",
        );
        return $data;
    }

    function initialize()
    {
        // Set the path to match in the controller.
        $path = $this->app['config']->get('general/branding/path') . '/googledrive';

        // Add the controller, so it can be matched.
        $this->app->match($path, array($this, 'googledrive'));

        // Add the menu-option. Only show it to users who have 'extensions' permission
        $this->addMenuOption('GoogleDrive', 'googledrive', 'icon-list', 'extensions');   
        
        /**
         * ensure proper config
         */
        if (!isset($this->config['client_id']) || !is_string($this->config['client_id'])) {
        	$this->config['client_id'] = 'default';
        }
        if (!isset($this->config['client_secret']) || !is_string($this->config['client_secret'])) {
        	$this->config['client_secret'] = 'default';
        }
        if (!isset($this->config['redirect_uri']) || !is_string($this->config['redirect_uri'])) {
        	$this->config['redirect_uri'] = 'default';
        }
        if (!isset($this->config['scope']) || !is_string($this->config['scope'])) {
        	$this->config['scope'] = 'default';
        }        

    }
         
    public function googledrive()
    {
    	// define logger object
    	$this->logger = new \Logger($this->config['log_dir']);
    	$this->logger->lwrite('Init logging Extension Google Drive');
    	
    	// empty html block to store data in
    	$html = "";
    	// create the client object
    	$client = $this->buildClient();
    	// create the service object
    	$service = new \Google_Service_Drive($client);
    	// make authentication url
    	$authUrl = $this->getAuthUrl($client);
    	    	
		// authentication successfull and token present
    	if ($client->getAccessToken()) {    		

    		// define drive util object
    		$driveUtil = new \Drive_Util($service, $this->logger);
    		
    		// Webcontentlink
    		#$html .= "<img src='https://docs.google.com/uc?id=0Byj7cTMPBl4QSEFXY1BEZ19rV3c'>";

    		// action url should be set accordingly to the site we are in -> nice to have
    		$html .= "<form action='" . $this->redirectUrl . "'>";
    		
    		// we are not in search results
    		if (!isset($_GET['search'])) {
    		
	    		// loop over all files objects found in google drive
	    		foreach ($driveUtil->getDriveFiles() as $driveFileObject) {
	
	    			// array with all file data 
	    			$fileData = $driveUtil->getMetadata($driveFileObject);
	    				    				
    				// check if we are on root level
    				if($driveUtil->isInRootFolder($fileData['parent']) && !isset($_GET['folderId'])) {
   
    				    // its a folder of type google folder and we are on root level
    					if($driveUtil->isDriveFolder($fileData['mimeType']) && !isset($_GET['folderId'])) {

    						// build icon for folder
    						$html .= \Drive_Html::buildIconLink($fileData['iconLink']);

    						// build up html link for folders
    						$html .= \Drive_Html::buildFolderLink($this->redirectUrl, $fileData);
    					    					
    					}   
    					// its a file on root level
    					else {
    						// build icon for files
    						$html .= \Drive_Html::buildIconLink($fileData['iconLink']);
    		    						
    						// build variable for downloading files with delimeter
    						$rVal = $fileData['downloadUrl'] . "+++" . $fileData['originalFilename'];	

    						$html .= \Drive_Html::buildCheckbox($rVal) . \Drive_Html::buildFileLink($fileData) . "<br/>";

    					} 							
    				}  
    				// file is shared
    				else if ($fileData['shared']) {
    					
    					// needs to be defines as what kind of type the download should happen
    					// text/csv, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
    					// for now i choose pdf

    					// workaround to remove : in shared file name
    					$sharedDownloadTitle=str_replace(":", "", $fileData['title']);
    					
    					$html .= "<hr>";    					
    					// build icon for shared files
    					$html .= \Drive_Html::buildIconLink($fileData['iconLink']);
    					
    					// build download paramaeters with direct array access
    					$rSval = $fileData['exportLinks']['application/pdf'] . "+++" . $sharedDownloadTitle . ".pdf";
    					$html .= \Drive_Html::buildCheckbox($rSval) . \Drive_Html::buildFileLink($fileData) . "<br/>";
    					
    					$html .= "<hr>";
    					
    				}    				 				
	    		}    		
    		}
    		
    		// SEARCH fulltext
    		if (isset($_GET['search'])) {    			
    			$html .= $this->searchForFiles($driveUtil, $_GET['search']);
    		}    		
    		    		
    		// there was a click on a folder in google drive
    		if (isset($_GET['folderId'])) {    			
    			$html .= $this->listFilesInFolder($driveUtil,$_GET['folderId']);    										      								
    		}
    		
    		// submit files for download
    		if (isset($_GET['driveFiles'])) {
    			foreach($_GET['driveFiles'] as $value) {	
    				$pieces = explode("+++", $value);
    				file_put_contents($this->checkDownloadDir() . '/' . $pieces[1], $driveUtil->downloadFile($pieces[0], $client));
    			}   
    			$html .= "Thank you for downloading";    			
    		}
    		
    		$html .= "<br/><br/>";
    		$html .= "<input type='submit' value='Download'>";
    		$html .= "</form>";
    		
    		// SEARCH
    		$html .= "<br/><br/>";
    		$html .= "<br/><br/>";
    		$html .= "<form action='" . $this->redirectUrl . "'>";
    		$html .= "Search :<input type='text' size='20' name='search'>";		
    		$html .= "<input type='submit' value='Search'>";
    		$html .= "</form>"; 

    		$html .= "<br/><br/>";
    		$html .= \Drive_Html::backButton();
    		
     		$html .= "<br/><br/>";
    		$html .= "<a class='logout' href='?logout'>Logout</a>";   		
	
    	} 
    	else {
    		
    		$this->logger->lwrite('No Access token present currently');
    		if($client->isAccessTokenExpired()) {
    			$this->logger->lwrite('Access token expired make login');  			
    			
    			// html block to login to drive
    			$html .= \Drive_Html::makeLogin($authUrl);

    		}
    	}   
    	
    	// output
    	return $this->app['render']->render('base.twig', array(
    			'title' => "Google Drive Test",
    			'content' => $html
    	));    	
    }
    
 

    /**
     * Helper function to get drive search results.
     *
     * @param resource drive utility object
     * @param string folder idr
     * @return string html to list files in folder
     */    
    private function listFilesInFolder ($driveUtil, $folderId) {
    	
    	$html = "";
    	// get array of Google_Service_Drive_ChildReference objects
    	$folderEntriesChilds = $driveUtil->printFilesInFolder($folderId);
    	 
    	// loop children of a given folder id
    	foreach ($folderEntriesChilds as $childItems) {
    	
    		// array with all files metadata from a folder id
    		$childData = $driveUtil->printFile($childItems->getId()) ;
    	
    		// type google folder
    		if($driveUtil->isDriveFolder($childData['mimeType'])) {
    				
    			// build icon for folder
    			$html .= \Drive_Html::buildIconLink($childData['iconLink']);
    			// build up html link for folders
    			$html .= \Drive_Html::buildFolderLink($this->redirectUrl,$childData);
    			 
    		}
    		// its a file on folder level
    		else {
    			// build variable for downloading files with delimeter
    			$cVal = $childData['downloadUrl'] . "+++" . $childData['originalFilename'];
    			$html .= \Drive_Html::buildCheckbox($cVal) . \Drive_Html::buildFileLink($childData) . "<br/>";
    				
    		}
    	}    	
    	
    	return $html;
    }

    /**
     * Helper function to get drive search results.
     *
     * @param resource drive utility object
     * @param string word to search for
     * @return string html to list files
     */    
    private function searchForFiles($driveUtil, $val) {
    	
    	$html = "";
    	
    	// build query string for fulltext
    	$query = "fullText contains '" . $val . "'";
    	
    	// loop ALL searched files found in google drive
    	foreach ($driveUtil->searchDriveFiles($query) as $searchDriveFileObject) {
    	
    		// build array with resultset
    		$searchData = $driveUtil->getMetadata($searchDriveFileObject);
    	
    		// build icon for files
    		$html .= \Drive_Html::buildIconLink($searchData['iconLink']);
    	
    		// handle shared search results differntly because of download link
    		if ($searchData['shared']) {
    			$sharedSearchDownloadTitle=str_replace(":", "", $searchData['title']);
    			$sVal = $searchData['exportLinks']['application/pdf'] . "+++" . $sharedSearchDownloadTitle . ".pdf";
    		}
    		else {
    			// build variable for downloading files with delimeter
    			$sVal = $searchData['downloadUrl'] . "+++" . $searchData['originalFilename'];
    		}
    		// build result html
    		$html .= \Drive_Html::buildCheckbox($sVal) . \Drive_Html::buildFileLink($searchData) . "<br/>";
    	}    
    	return $html;    	
    }
    
    /**
     * Helper function to check if a directory for download exists.
     *
     * @return string path to directory for downloading
     */    
    private function checkDownloadDir () { 	
    	$path = $_SERVER['DOCUMENT_ROOT'] . "/files/" . date("Y-m");
    	if (!file_exists($path)) {
    		mkdir($path, 0777, true);
    	}  
    	return $path;  	
    }

    
    /**
     * Build authentication url.
     *
     * @param object google client object
     * @return string url.
     */
    private function getAuthUrl ($client) {
    		
    	if (isset($_GET['logout'])) {
    		unset($_SESSION['token']);
    	}
    
    	if (isset($_GET['code'])) {
    		$client->authenticate($_GET['code']);
    		$_SESSION['token'] = $client->getAccessToken();
    
    		$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    		$redirect = 'http://localhost/bolt/googledrive';
    		header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL)); 
    		exit;   		
    	}
    
    	if (isset($_SESSION['token'])) {
    		$client->setAccessToken($_SESSION['token']);
    	}
    
    	if ($client->getAccessToken()) {
    		$_SESSION['token'] = $client->getAccessToken();
    		$token = json_decode($_SESSION['token']);
    		$this->logger->lwrite("Access Token = " . $token->access_token);
    		$this->logger->lwrite("Refresh Token = " . $token->refresh_token);
    		$this->logger->lwrite("Token type = " . $token->token_type);
    		$this->logger->lwrite("Expires in = " . $token->expires_in);
    		$this->logger->lwrite("ID Token = " . $token->id_token);
    		$this->logger->lwrite("Created = " . $token->created);
    		

    		
    	}
    	else {
    		
    		$this->logger->lwrite('getAuthUrl currently no access token');
    		if($client->isAccessTokenExpired()) {
    			$this->logger->lwrite('getAuthUrl Access token expired');


    			$authUrl = $client->createAuthUrl();

    		}
    		
    	}
    	return $authUrl;
    }    
    
    /**
     * Helper function to construct a configured Google Client.
     *
     * @return object google client
     */    
    private function buildClient() {

    	// get redirect url for later navigation stuff
    	$this->redirectUrl = $this->config['redirect_uri'];
    	 
    	// create google client
    	$client = new \Google_Client();
    	
    	$client->setClientId($this->config['client_id']);
    	$client->setClientSecret($this->config['client_secret']);
    	$client->setRedirectUri($this->redirectUrl);
    	$client->addScope($this->config['scope']);
    	$client->setAccessType('offline');

    	return $client;
    }    
    
    
    
}