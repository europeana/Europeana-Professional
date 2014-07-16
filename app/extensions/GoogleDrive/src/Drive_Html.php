<?php

class Drive_Html {
	
    /**
     * Helper function to construct a google drive login.
     *
     * @param string $authUrl Google drive url for login
     * @return string html to login to drive
     */
    public static function makeLogin($authUrl) {
    	 
    	$html = "";
    	$html .= "<div class='request'>";
    	if (isset($authUrl)) {
    		$html .= "<a class='login' href='$authUrl'>Connect Me!</a>";
    	}
    	$html .= "</div>";
    	return $html;
    }  	
	
    /**
     * Helper function to build up a html link element.
     * 
     * @return string html code
     */ 	
    public static function backButton () {
    	$html = "<FORM><INPUT Type='button' VALUE='Back' onClick='history.go(-1);return true;'></FORM>";
    	return $html;
    }	
		
    /**
     * Helper function to build up a html link element.
     *
 	 * @param string url for google drive icon     
     * @return string html code
     */    
    public static function buildIconLink ($iconUrl) {
    	return "<img src='" . $iconUrl . "' alt=''>&nbsp;";
    }	
    
    /**
     * Helper function to build up a html link element.
     *
 	 * @param array data     
     * @return string html code
     */    
    public static function buildFileLink ($data) {
    	return "<a href='" . $data['alternateLink'] . "' target='_blank'>" . $data['title'] . "</a>";
    }    
    
    /**
     * Helper function to build up a html checkbox element.
     *
     * @param string redirect url    
     * @param array data
     * @return string html code
     */    
    public static function buildFolderLink ($url, $data) {    	
    	return "<a class='login' href='".$url."?folderId=".$data['id']."'>".$data['title']."</a><br/>";    	
    }   
    
    /**
     * Helper function to build up a html checkbox element.
     *
 	 * @param string download url   
     * @return string html code
     */
    public static function buildCheckbox ($value) {
    	return "<input type='checkbox' name='driveFiles[]' value='". $value ."'>&nbsp;";
    }    
	
}