<?php
	class Log
	{
		private $handle;
	    private $filename;


		public function __construct($prefix = "log"){
		    $this->filename = $prefix . date("Y-m-d h:i:s ") . ".log";
			$this->handle = fopen($this->filename, 'a');

		}

	    private function setFilename($filename)
	    {
	    	if(is_string($filename))
	    	{
	    		if(touch($filename))
	    		{
	    			if(is_writable($filename))
	    			{
	    				$this->filename = $filename;
	    			}
	    		}
	    	}
	    }

		public function logMessage($logLevel, $message)
		{
		    $fullMessage = date("Y-m-d h:i:s ") . $logLevel . $message;
			fwrite($this->handle, $fullMessage . PHP_EOL);
		}

		public function logInfo($message) 
		{
			$this->logMessage("INFO", $message);
		}

		public function logError($message)
		{
			$this->logMessage("ERROR", $message);
		}

		public function __destructor(){
			fclose($this->handle);
		}
	}