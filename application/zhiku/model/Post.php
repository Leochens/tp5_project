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

    public static function all($data = null, $with = [], $cache = false)
      {
      $query = static::parseQuery($data, $with, $cache);
      return $query->select($data);
      }
}



 ?>