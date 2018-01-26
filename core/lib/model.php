<?php
namespace core\lib;
use core\lib\conf;
/**
 * 模型类
 */
class Model extends \Medoo\medoo{

    public function __construct(){
        $option = conf::all('database');
        parent::__construct($option);
    }

}