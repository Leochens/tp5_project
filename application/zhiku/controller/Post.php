<?php 
namespace app\zhiku\controller;
use think\Controller;

class Post extends Controller{


    private $postModel;
    public function __construct(){

        //先调用父类的构建函数
        parent::__construct();
        $this->postModel=db('article');
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
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'dateline' => time(),
            'content' => $_POST['content'],
            'tags'=>$_POST['tags'],
            'pic_path'=>$_POST['pic_path'],
            'flag' => $_POST['flag'] 
        ];

        if($this->postModel->insert($data))
            return $this->showMessage('添加成功');
        else
            return $this->showMessage('添加失败');

    }  

    public function delete(){

        if($this->isGet()&&isset($_GET['id'])&&!empty($_GET['id'])&&$_GET['id']>=0)
        {
            if($this->postModel->where('id',$_GET['id'])->delete())
                return $this->showMessage('删除成功');
            else
                return $this->showMessage('删除失败');
        }else{
            return $this->showMessage('检测GET数据：未输入或输入的GET值有误');
        }

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
