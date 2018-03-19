<?php 
namespace app\zhiku\model;
use think\Model;

/**
* 
*/
class Post extends Model
{
    protected $id = 'id';

    protected $table = 'article';

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * 调用Model的初始化
     * @return [type] [description]
     */
    protected function initialize(){

        parent::initialize();
    }

    public function add($data){
        $this->data($data);
        $this->save();
    }

    /*public function update(){

    }

    public function delete(){

    }

    public function get(){

    }*/

}



 ?>