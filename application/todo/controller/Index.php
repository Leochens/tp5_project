<?php 
namespace app\todo\controller;
use think\Controller;

class Index extends Controller{
    public function index(){

    //首页要显示所有的事务 也就是完成查询工作
    $todoList = model('Things')->select();
    $this->assign([
                'author'=>'张鹤麟',
                'copyright'=>'mokis.top | All Right Reserved. ',
                'list'=>$todoList,
                'root'=>'/public/index.php'
            ]);

    return $this->fetch('index');  
    }

    /**
     * 添加事务
     */
    public function add()
    {
        if(isset($_POST['contents'])&&!empty($_POST['contents']))
        {
            $data = [   'user'=>'zhl',
                        'contents'=>$_POST['contents'],
                        'time'=>date('Y-m-d h-i-s')
                         ];
            model('Things')->save($data);

            return json(['status'=>1,'contents'=>$_POST['contents'],'id'=>model('Things')->id]);
        }else{
            return json(['status'=>0,'error'=>'添加失败']);
        }
        //return 'this is add page';
    }

    /**
     * 删除(完成)事务
     * @return [type] [description]
     */
    public function delete()
    {
        if(isset($_GET['id'])&&!empty($_GET['id']))
        {
            //过滤id参数
            //$_GET['id'] =  ($_GET['id']);

            if(model('Things')->where('id ='.$_GET['id'])->delete())
            {
                return json(['status'=>1,'id'=>$_GET['id']]);
            }else
            {
                return json(['status'=>0]);
            }
        }
        return '你还没说要删哪个~~~';

    }

    /**
     * 更新(更改)事务
     * @return [type] [description]
     */
    public function update()
    {
        return 'this is update page';

    }
    public function isdone()
    {
        if(isset($_GET['id'])&&!empty($_GET['id']))
        {
            //过滤id参数
            //$_GET['id'] =  ($_GET['id']);
            if($_GET['done'])
            {
                if(model('Things')->save(['isdone'=>1],['id'=>$_GET['id']]))
                {
                    return json(['status'=>1,'id'=>$_GET['id']]);
                }else
                {
                    return json(['status'=>0]);
                }                
            }else{
                if(model('Things')->save(['isdone'=>0],['id'=>$_GET['id']]))
                {
                    return json(['status'=>1,'id'=>$_GET['id']]);
                }else
                {
                    return json(['status'=>0]);
                }                   
            }
            
        }
        return '你还没说要删哪个~~~';

    }    
    /**
     * 检测用户是否登录 session实现
     * @return [type] [description]
     */
    private function check()
    {

    }

}




 ?>