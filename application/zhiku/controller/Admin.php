<?php 
namespace app\zhiku\controller;
use think\Controller;

/**
 * 管理员界面
 */

class Admin extends Controller{
    public function index(){
        

        $postModel = model('Post');

        $this->assign([
            'artiList'  => $postModel->where(1)->find()  

        ]);
        
        return $this->fetch('index',[],['__PUBLIC__'=>'/public/']);
    }

    public function login()
    {


        /**
         * 模板文件不存在 问题待解决
         */



        return $this->fetch('login',[],['__PUBLIC__'=>'/public/']);
    }
}


 ?>