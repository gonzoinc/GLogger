<?php

namespace Glogger;

use Katzgrau\KLogger\Logger;
use Psr\Log\LogLevel;

/**
 * Class Log
 * @package Core
 */
class Log
{

    /**
     * @var Logger
     */
    private $logger;

    /**
     * Log constructor.
     */
    public function __construct()
    {

        if (!is_dir(LOG_ROOT)) {
            $oldmask = umask(0);
            mkdir(LOG_ROOT, 0777, true);
            umask($oldmask);
            chmod(LOG_ROOT, 0777);
        }

        if (!is_file(LOG_ROOT  . LOG_FILENAME)) {
            fopen(LOG_ROOT . LOG_FILENAME, "w");

            chmod(LOG_ROOT . LOG_FILENAME, 0644);
        }

        $level = constant("Psr\Log\LogLevel::".LOG_LEVEL);
        $path = LOG_ROOT;
        $options =  array (
            'dateFormat'    => 'Y-m-d\TH:i:s.uP',
            'filename'      => LOG_FILENAME,
            'appendContext' => true,
            'logFormat'     => json_encode([
                '@timestamp'=> '{date}',
                'service'   =>  LOG_SERVICE,
                'level'     => '{level}',
                'message'   => '{message}'])
        );

        $this->logger = new Logger($path, $level, $options);
    }

    /**
     * @param $message
     */
    public function debug($message)
    {
        $this->logger->debug($message);
    }

    /**
     * @param $message
     */
    public function info($message)
    {
        $this->logger->info($message);
    }

    /**
     * @param $message
     */
    public function warn($message)
    {
        $this->logger->warning($message);
    }

    /**
     * @param $message
     */
    public function error($message)
    {
        $this->logger->error($message);
    }

    /**
     * @param $message
     */
    public function critical($message)
    {
        $this->logger->critical($message);
    }
}