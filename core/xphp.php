<?php

namespace core;

use core\lib\log;
use core\lib\route;

/**
 * 框架核心类
 */
class xphp
{

    public static $classMap = array();
    public $assign = array();

    /**
     * 启动框架
     */
    public static function run()
    {
        log::init();
        $route = new route();
        $ctrlClass = ($route->ctrl ?? 'index');
        $action = ($route->action ?? 'index');
        $ctrlFile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
        $ctrlClass = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';
        //var_dump($route->ctrl);exit;
        if (is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->beforeAction($action);
            $ctrl->$action();
            $ctrl->afterAction($action);
            log::log('ctrl:' . $ctrlClass . '  action:' . $action);
        } else {
            log:
            log('找不到控制器' . $ctrlClass);
            throw new \Excetion('找不到控制器' . $ctrlClass);
        }
    }

    /**
     * 自动加载类库
     *  new \core\route();
     *  $class = '\core\route';
     *  XROOT.'/core/route.php';
     */
    public static function load($class)
    {
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = XROOT . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }

    }

}