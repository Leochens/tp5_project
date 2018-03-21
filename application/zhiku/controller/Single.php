<?php 
namespace app\zhiku\controller;
use think\Controller;
/**
 * 单一文章页面
 * 详情页
 */

class Single extends Controller{


    /**
     * 详情页
     * id  文章id 
     * @return [type] [description]
     */
    public function index($id){


        //获得数据
        $single_post = db('article')->where('id',$id)->find();
        if(empty($single_post))
            return '<h1>id不存在</h1>';
        //print_r($single_post); debug

        $this->assign('data', $single_post);

        return $this->fetch('single-post',[],['__PUBLIC__'=>'/public/']);
    }


}



 ?>