<?php
define('XROOT',str_replace('\\','/',dirname(realpath(__FILE__))));
define('CORE',XROOT.'/core');
define('APP',XROOT.'/app');
define('MODULE', 'app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle('系统开小差啦！');
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
    error_reporting(E_ALL);
}else{
    ini_set('display_error', 'Off');
    error_reporting(0);
}

include CORE.'/common/function.php';
include CORE.'/xphp.php';

spl_autoload_register('\core\xphp::load');

\core\xphp::run();