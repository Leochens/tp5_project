<?php 
namespace app\zhiku\controller;
use think\Controller;

class Index extends Controller{

    public function index(){

        $this->assign([
            
        ]);

        //注册根目录
        return $this->fetch('index',[],['__PUBLIC__'=>'/public/']);
    }

}



 ?>