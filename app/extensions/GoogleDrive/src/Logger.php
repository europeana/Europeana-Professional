<?php
/*
 * (c) Copyright nexum AG. 2014. All rights reserved.
* May not be used without prior written agreement signed by a nexum
* corporate officer.
* - - - - - - - - - - - - D I S C L A I M E R - - - - - - - - - - - - - - - - -
* By accepting this software ("Software"), you ("Customer") agree that use of
* the Software is subject to the terms and conditions of the software license
* agreement entered into between you and nexum, except that (i) the
* Software is supplied on a strict "AS IS" basis, without warranty of any kind
* or nature. NEXUM DISCLAIMS ANY AND ALL EXPRESS OR IMPLIED WARRANTIES
* RELATIVE TO THE SOFTWARE, INCLUDING, WITHOUT LIMITATION, ANY IMPLIED WARRANTY
* OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, and (ii) in no event
* shall nexum be liable to Customer for any damages, whether direct,
* indirect, special, incidental, consequential or punitive, which in any way
* arise out of or relate to the Software, and (iii) nexum shall not
* provide support of any kind for the Software. nexum retains title to all
* portions of the Software and any copies thereof.
*
* Do not contact nexum Technical Support or Consulting with questions
* regarding the use or operation of this code. Assistance with
* tailoring/customizing this code can be purchased on a time and materials
* basis from nexum.
*******************************************************************************
*
* Project        www.europeana.eu
* File Name      Logger.php
* Tab Width      4
* Description    Small logger class
* Created by     Alexander Linn
* Created on     03.07.2014
*
* Version        1.0
* Comment        Initial
* Modified by    ${user}
* Modified on    ${date}
*
*******************************************************************************/

/*
 * 
 *	Usage: (maybe use log4php in composer.json with name apache/log4php)
 * 
 *	var $logger;
 *
 *	public function __construct() {
 *		$this->logger = new Logger();
 *	}
 *
 *	$this->logger->lwrite('String' . $xml);
*/
class Logger {

        // define default log file
        private $log_file;

        // define file pointer
        private $fp = null;
        
        //where to log
        private $log_dir;

        
        public function __construct($logDir) {
        	
        	$this->log_dir = $logDir;
        	// logfile path
        	$this->log_file = $_SERVER['DOCUMENT_ROOT'] . $this->log_dir;
        }        
        
        // set log file (path and name)
        public function lfile($path) {
                $this->log_file = $path;
        }

        // write message to the log file
        public function lwrite($message){
        	
                // if file pointer doesn't exist, then open log file
                if (!$this->fp) $this->lopen();
                // define script name
                $script_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
                // define current time
                $time = date('H:i:s');
                // write current time, script name and message to the log file
                fwrite($this->fp, "$time ($script_name) $message\n");
        }

        // open log file
        private function lopen(){
                // define log file path and name
                $lfile = $this->log_file;
                // define the current date (it will be appended to the log file name)
                $today = date('Y-m-d');
                // open log file for writing only; place the file pointer at the end of the file
                // if the file does not exist, attempt to create it
                $this->fp = fopen($lfile, 'a') or exit("Can't open $lfile!");
        }
}




?> 