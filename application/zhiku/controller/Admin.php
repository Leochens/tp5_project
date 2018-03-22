<?php 
namespace app\zhiku\controller;
use think\Controller;

/**
 * 管理员界面
 */

class Admin extends Controller{
    public function index($what = 'articleAdd'){
            


        $this->assign([
           
        ]);
        
        return $this->fetch('index');
    }

    public function login()
    {


        /**
         * 模板文件不存在 问题待解决
         * 已解决  控制器中不用设定__PUBLIC__ 资源加载时写/static/..即可
         */

        return $this->fetch('login');
    }

    public function add(){
        return $this->fetch('articleAdd');

    }

    public function artiList(){

        $posts = db('article')->select();


        $this->assign([
            'artiList'  => $posts,  
            
        ]);        
        //print_r($posts);
        return $this->fetch('artiList');
    }
}


 ?>