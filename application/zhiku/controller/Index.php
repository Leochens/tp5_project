<?php 
namespace app\zhiku\controller;
use think\Controller;
use think\Db;

use think\Route;


class Index extends Controller{

    public function index(){

        $postModel = db('article');
        $this->assign([
            'arti_data'=>$postModel->select(),
            'hot'=> $postModel->where('flag','hot')->select(),
            'latest'=> $postModel->where('flag','latest')->select(),
            'Menu'=>array(3),
            'single_route'=>'single/'
        ]);
        //print_r($postModel->select());
        //注册根目录
        return $this->fetch('index');
    }

}



 ?>