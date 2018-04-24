<?php
namespace app\index\controller;
use think\Controller;

ini_set('display_errors',1);            //错误信息  
ini_set('display_startup_errors',1);    //php启动错误信息  

class Index extends Controller{
    public function index(){    
            return '<h1>hello ThinkPHP!</h1>';
    }
}