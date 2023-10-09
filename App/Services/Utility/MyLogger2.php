<?php

namespace App\Services\Utility;

use Monolog\Logger;
use Monolog\Handler\LogglyHandler;

class MyLogger2 implements ILogger
{
    private static $logger == null;
    
    static function getLogger()
    {
        if (self::$logger == null)
        {
            self::$logger = new Logger('playlaravel');
            self::$logger->pushHandler(new LogglyHandler('0b997dfa-87d1-4cbb-abe4-0cc61f97adc4/tag/cst323_logfile_heroku_upload', Logger::DEBUG));
        }
        return self::$logger;
    }
    
    public static function debug($message, $data=array())
    {
        self::getLogger()->addDebug($message, $data);
    }
    
    public static function info($message, $data=array())
    {
        self::getLogger()->addInfo($message, $data);
    }
    
    public static function warning($message, $data=array())
    {
        self::getLogger()->addWarning($message, $data);
    }
    
    public static function error($message, $data=array())
    {
        self::getLogger()->addError($message, $data);
    }
}