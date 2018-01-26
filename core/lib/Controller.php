<?php
namespace core\lib;
use core\lib\log;
use core\common\Response;

/**
 * 控制器基类
 */
class Controller{

    public $assign = array();
    const DEFAULT_TYPE = "json";
    
    /**
     * 执行前调用
     */
    public function beforeAction($action){
        log::log('beforeAction:'.$action);
    }
    /**
     * 执行后调用
     */
    public function afterAction($action){
        log::log('afterAction:'.$action);
    }

    /**
     * 绑定数据
     */
    public function assign($name, $value){
        $this->assign[$name] = $value;
    }
    /**
     * 调用视图
     */
    public function display($fileName){
        $file = APP.'/views/'.$fileName;
        if(is_file($file)){
            //\Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader,array(
                'cache' => XROOT.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate($fileName);
            $template->display($this->assign);
        }
    }
    /**
     * 返回json数据
     */
    public function renderJson($code, $message,$data){
         Response::show($code, $message,$data);
    }
    /**
     * 返回成功的json数据
     */
    public function success($data){
         $this->renderJson(0,'成功',$data);
    }
    /**
     * 返回失败的json数据
     */
    public function error($code, $message,$data){
        $this->renderJson($code, $message,$data);
    }

    /**
     * 重定向
     */
    public function redirect($url){
        header('location:'.$url);
        exit();
    }

}