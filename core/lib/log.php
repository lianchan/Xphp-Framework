<?php
namespace core\lib;
use core\lib\conf;
/**
 * 日志类
 */
class log{

    static $class; 
    /**
     * 1.确定日志的存储方式
     * 2.写日志
     */
    static public function init(){
        //确定存储方式
        $driver = conf::get('DRIVER', 'log');
        $class = '\core\lib\driver\log\\'.$driver;
        self::$class = new $class;
    }

    static public function log($name, $file='log'){
        self::$class->log($name, $file);
    }
}