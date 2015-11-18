<?php
	class Log
	{
		private $handle;
	    public $filename;

		public function __construct($prefix = "log"){
		    $this->filename = $prefix . date("Y-m-d h:i:s ") . ".log";
			$this->handle = fopen($this->filename, 'a');

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