<?php 
namespace app\zhiku\controller;
use think\Controller;

class Post extends Controller{


    private $postModel;
    public function __construct(){

        //先调用父类的构建函数
        parent::__construct();
        
    }
    public function _initialize(){
        //判断是否登录且是管理员 否则没有权限操作
        if(!$this->isAdmin())
        {
            return $this->showMessage('您不是管理员');
        }        

        //return true;  
        die();
    }

    public function add(){

        //判断是否是post的数据 不是的话就停止
        if(!$this->isPost())
        {
            return $this->showMessage('不是post的数据或post了空数据');            
            
        }
        
        $data =[
            'title' => 'zhl-tp-zhiku-test',
            'author' => 'zhl',
            'dateline' => time(),
            'content' => 'this is a tp-zhiku test contents',
            'tags'=>'test',
            'pic_path'=>'####',
            'flag' => 'hot' 
        ];

        $this->postModel->add($data);
    }  

    public function delete(){


    }

    public function update(){

    }

    public function get(){

    }

    /**
     * 判断请求是否是post
     * @return boolean [description]
     */
    private function isPost(){
        if($_SERVER['REQUEST_METHOD']=='POST'&& !empty($_POST))
            return true;
    }

    /**
     * 判断请求是否是get
     * @return boolean [description]
     */
    private function isGet(){
        if($_SERVER['REQUEST_METHOD']=='GET'&& !empty($_GET))
            return true;    
    }

    /**
     * 判断是否是登录态
     * @return boolean [description]
     */
    private function isLoginStatus(){

    }

    /**
     * 判断是否是管理员
     * @return boolean [description]
     */
    private function isAdmin(){
        //$auth = model('Admin');
        return false;
    } 

    private function showMessage($str)
    {
        $this->assign('msg',$str);
        return $this->fetch('message');
    }
}
