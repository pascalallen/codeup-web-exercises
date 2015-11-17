<?php
	class Log
	{
	    public $filename;
		public function logMessage($logLevel, $message)
		{
		    $this->filename = "log-" . date("Y-m-d h:i:s ") . ".log";
		    $fullMessage = date("Y-m-d h:i:s ") . $logLevel . $message;
			$handle = fopen($this->filename, 'a');
			fwrite($handle, $fullMessage . PHP_EOL);
			fclose($handle);
		}

		public function logInfo($message) 
		{
			$this->logMessage("INFO", $message);
		}

		public function logError($message)
		{
			$this->logMessage("ERROR", $message);
		}
	}