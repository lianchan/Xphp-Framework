<?php
namespace core\lib;
use core\lib\conf;
use function var_dump;

/**
 * 路由类
 */
class route{

    public $ctrl;
    public $action;

     /**
     * 1. 隐藏index.php 
     * 2. 获取URL参数部分
     * 3. 返回对应的控制器和方法
     */
    public function __construct(){
        // xxx.com/index.php/index/index
        //教程中使用$_SERVER['REQUEST_URI']
        $path = $_SERVER['PATH_INFO'];
        $patharr = explode('/', trim($path, '/'));
        if(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '/'&&!empty($patharr[0])){
            // 解析 /index/index
            //var_dump($patharr);exit;
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = conf::get('DEFAULT_ACTION', 'route');
            }
            //url多余部分转换成 GET
            //id/1/str/2
            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
        }else{
            $this->ctrl = conf::get('DEFAULT_CTRL', 'route');
            $this->action = conf::get('DEFAULT_ACTION', 'route');
        }
    }
}