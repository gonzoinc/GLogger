<?php

require_once "init.php";

// Composer required modules
require_once 'vendor/autoload.php';

use Glogger\Log;

$logger = new Log();

$logger->debug("This is a debug message");

$logger->warn("This is a warning message");

$logger->info("This is an info message");

$logger->error("This is an error message");

$logger->critical("This is a critical message");

echo "does this thing work!";
