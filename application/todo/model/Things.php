<?php 
namespace app\todo\model;
use think\Model;

class Things extends Model{

    protected $id = 'id';

    public function initialize(){
        parent::initialize();
    }
    
}

 ?>