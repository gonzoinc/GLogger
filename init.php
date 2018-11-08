<?php

// Security Settings & Security Header Definitions
ini_set('expose_php', 'off');
header_remove("X-Powered-By");
header("strict-transport-security: max-age=600");
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1');
header('X-Content-Type-Options: nosniff');

// Error Reporting
ini_set('display_errors', 1);
ini_set('error_reporting', 'E_ALL');


// Log file settings
// Add these settings to your current init file and change them accordingly

define("LOG_ROOT", getcwd() . "/logs/");                // Absolute path to your log directory
define("LOG_SERVICE", "logger");                        // Name of your Application Service
define("LOG_FILENAME", LOG_SERVICE . "-logstash.log");  // Log Filename
define("LOG_LEVEL", "DEBUG");                           // Minimum Logging Level
