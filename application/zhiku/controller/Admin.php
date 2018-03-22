<?php 
namespace app\zhiku\controller;
use think\Controller;

/**
 * 管理员界面
 */

class Admin extends Controller{
    public function index($what = 'articleAdd'){
            

        $postModel = model('Post');

        $this->assign([
            'artiList'  => $postModel->where(1)->select(),  
            'what'=>'admin/'.$what
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

    public function list__(){
        return $this->fetch('artiList');
    }
}


 ?>