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

    /*public static function update(){

    }

    public static function delete(){

    }

    public static function get(){
        return $this->find();
    }*/

}



 ?>