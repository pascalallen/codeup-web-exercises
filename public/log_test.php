<?php
require_once "Log.php";
$logger = new Log();
$logger->logInfo(" This is an info message.");
$logger->logError(" This is an error message.");