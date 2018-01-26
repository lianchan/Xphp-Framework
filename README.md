># Xphp A Light PhpFrameWork 
> PHPer 必须学习的自助搭建框架
> #Author :陈建华
> #email:unnnnn@foxmail.com

## 框架运行流程
1.入口文件 -> 定义常量  -> 引入函数库  -> 自动加载类  -> 启动框架 
2. 路由解析-> 加载控制器-> Http响应     

## 入口文件
>index.php
## 类自动加载
```
spl_autoload_register('\core\Xphp::load');
```
没有引入的类调用load方法  

## 路由类

默认的路由地址：  xxx.com/index.php/index/index    

1. 隐藏index.php    
    在根目录添加.htaccess文件
2. 获取URL参数部分   
    /index/index/id/1/str/2
3. 返回对应的控制器和方法   
   
## 模型类
继承PDO

## 视图类
集成Twig类

## 配置类
Config类
## 控制器
添加core\lib\Controller基类   
添加beforeAction方法   
添加afterAction方法   

## 日志类

## composer加载 vendor
1. 新建composer.json文件
```
{
    "name":"Xphp",
    "descrption": "A Php Framework For Student To Use！",
    "type":"Framework",
    "keywords":[
        "PHP", "PHP FrameWork","Light Php FrameWork"
    ],
    "require": {
        "php": ">= 7.0.0",
        "filp/whoops":"*",
        "symfony/var-dumper":"*",
        "catfan/medoo":"*",
        "twig/twig":"*"
    },
    "repositories": {
        "packagist": {
            "type": "composer",
            "url": "https://packagist.phpcomposer.com"
        }
    }
}
```
2. 使用composer命令安装依赖
```
composer install
composer update
```

## medoo数据库操作
http://medoo.lvtao.net/doc.php

## twig模版引擎
https://twig.symfony.com/doc/2.x/api.html# Xphp-Framework
