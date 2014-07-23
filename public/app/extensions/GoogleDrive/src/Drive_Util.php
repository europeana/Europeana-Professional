<?php

class Drive_Util
{
	private $service;
	private $logger;
	
	public function __construct($service, $logger) {			
		// Drive API service instance
		$this->service = $service;
		// logger object
		$this->logger = $logger;
		$this->logger->lwrite('Init logging Drive Util');
	}	

	/**
	 * Search fulltext for a list of drive File resources.
	 *
	 * @return Array List of Google_Service_Drive_DriveFile resources.
	 */	
	public function searchDriveFiles($query) {
	
		$result = array();
		
		$parameters = array();
		$parameters['q'] = $query;
	
		$files = $this->service->files->listFiles($parameters);
	
		foreach ($files->getItems() as $file) {
	
			$result[] = $file;
		}
		return $result;
	}
	
	/**
	 * Insert a new custom file property.
	 *
	 * @param String $fileId ID of the file to insert property for.
	 * @param String $key ID of the property.
	 * @param String $value Property value.
	 * @param String $visibility 'PUBLIC' to make the property visible by all apps,
	 *                           or 'PRIVATE' to make it only available to the app that created it.
	 * @return Google_Property The inserted property. NULL is returned if an API error occurred.
	 */
	function insertProperty($fileId, $key, $value, $visibility) {
		$newProperty = new Google_Property();
		$newProperty->setKey($key);
		$newProperty->setValue($value);
		$newProperty->setVisibility($visibility);
		try {
			return $this->service->properties->insert($fileId, $newProperty);
		} 
		catch (Exception $e) {
			print "An error occurred: " . $e->getMessage();
		}
		return NULL;
	}	
			
	/**
	 * Retrieve a list of drive File resources.
	 *
	 * @return Array List of Google_Service_Drive_DriveFile resources.
	 */	
	public function getDriveFiles() {
	
		$result = array();
		$pageToken = NULL;
	
		do {
			try {
				$parameters = array();
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}

				$files = $this->service->files->listFiles($parameters);

				foreach ($files->getItems() as $file) {
					
					#var_dump($file);

					$fileData = $this->getMetadata($file);
					// get only files which are NOT trashed					
					if (!$fileData['explicitlyTrashed']) {
						$result[] = $file;						
					}					
				}
				$pageToken = $files->getNextPageToken();	
			}
			catch (Exception $e) {
				$this->logger->lwrite('An error occurred in getDriveFiles ' . $e->getMessage());
				$pageToken = NULL;
			}
		}
		while ($pageToken);
		return $result;
	}
	
	/**
 	* Download a file's content.
 	*
 	* @param string url to download file.
 	* @param client google drive client object.
	* @return String The file's content if successful, null otherwise.
 	*/			
	public function downloadFile($downloadUrl,$client) {
		
		if ($downloadUrl) {
			$request = new \Google_Http_Request($downloadUrl, 'GET', null, null);
	
			$SignhttpRequest = $client->getAuth()->sign($request);
			$httpRequest = $client->getIo()->makeRequest($SignhttpRequest);
	
			if ($httpRequest->getResponseHttpCode() == 200) {
				return $httpRequest->getResponseBody();
			} else {
				// An error occurred.
				return null;
			}
		} else {
			// The file doesn't have any content stored on Drive.
			return null;
		}
	}			
		
	/**
 	* Check if a File resources is on the root level.
 	*
	* @param $parentObject array of Class Google_Service_Drive_ParentReference objects 	
 	* @return boolean true if resource is on root level.
 	*/			
	public function isInRootFolder ($parentObject) {
		
		foreach ($parentObject as $parent) {
			if($parent->getIsRoot()) {
				return true;
			}
			else {
				return false;
			}	
		}	
	}	
	
	/**
	 * Check if a File resources is a google folder.
	 *
	 * @param $mimeType string of mimeType of file
	 * @return boolean true if resource is a folder.
	 */
	public function isDriveFolder ($mimeType) {
	
		if($mimeType == "application/vnd.google-apps.folder") {
			return true;
		}
		else {
			return false;
		}
	}	
	
	/**
 	* Retrieve a list of File resources.
 	*
	* @param int $folderId the id of a google drive entry
 	* @return array List of Google_Service_Drive_ChildReference references
 	*/		
	public function printFilesInFolder($folderId) {
		$pageToken = NULL;
		
		$result = array();
		
		do {
			try {
				$parameters = array();
				
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}
				
				$children = $this->service->children->listChildren($folderId, $parameters);
				
				foreach ($children->getItems() as $child) {					
					// see: https://api.kdyby.org/class-Google_Service_Drive_ChildReference.html
					$result[] = $child;					
				}
				$pageToken = $children->getNextPageToken();
			} 
			catch (Exception $e) {
				$this->logger->lwrite('An error occurred in printFilesInFolder' . $e->getMessage());
				$pageToken = NULL;
			}
		} 
		while ($pageToken);
		return $result;
	}	
	
	/**
	 * Returns array meta data for given DriveFile object
	 *
	 * @param Google_Service_Drive_DriveFile file object to print metadata for.
	 * @return array of meta data
	 */
	public function getMetadata(Google_Service_Drive_DriveFile $driveFileObject)
	{
		// see: https://api.kdyby.org/class-Google_Service_Drive_DriveFile.html for available methods
		try {
			return array(
					'alternateLink' => $driveFileObject->getAlternateLink(),
					'description' => $driveFileObject->getDescription(),
					'downloadUrl' => $driveFileObject->getDownloadUrl(),
					'explicitlyTrashed' => $driveFileObject->getExplicitlyTrashed(),
					'fileExtension' => $driveFileObject->getFileExtension(),
					'iconLink' => $driveFileObject->getIconLink(),
					'id' => $driveFileObject->getId(),
					'kind' => $driveFileObject->getKind(),
					'label' => $driveFileObject->getLabels(),
					'mimeType' => $driveFileObject->getMimeType(),
					'originalFilename' => $driveFileObject->getOriginalFilename(),
					'owner' => $driveFileObject->getOwners(),
					'parent' => $driveFileObject->getParents(),
					'shared' => $driveFileObject->getShared(),
					'thumbnail' => $driveFileObject->getThumbnail(),
					'title' => $driveFileObject->getTitle(),
					'webContentLink' => $driveFileObject->getWebContentLink(),
					'exportLinks' => $driveFileObject->getExportLinks()
			);
		}
		catch (Exception $e) {
			$this->logger->lwrite('An error occurred in getMetadata' . $e->getMessage());
		}
	}
		
	/**
	 * Get a file's metadata.
	 *
	 * @param string $fileId ID of the file to print metadata for.
	 * @return array of meta data	 
	 */
	public function printFile($fileId) {
		try {
			$file = $this->service->files->get($fileId);
				
			return array(
					'alternateLink' => $file->getAlternateLink(),
					'description' => $file->getDescription(),
					'downloadUrl' => $file->getDownloadUrl(),
					'explicitlyTrashed' => $file->getExplicitlyTrashed(),
					'fileExtension' => $file->getFileExtension(),
					'iconLink' => $file->getIconLink(),
					'id' => $file->getId(),
					'kind' => $file->getKind(),
					'label' => $file->getLabels(),
					'mimeType' => $file->getMimeType(),
					'originalFilename' => $file->getOriginalFilename(),
					'owner' => $file->getOwners(),
					'parent' => $file->getParents(),
					'shared' => $file->getShared(),
					'thumbnail' => $file->getThumbnail(),
					'title' => $file->getTitle(),
					'webContentLink' => $file->getWebContentLink()
			);
		} 
		catch (Exception $e) {
			$this->logger->lwrite('An error occurred in printFile' . $e->getMessage());
		}
	}		
}
?>