<?php
namespace app\model;
use core\lib\Model;

class testModel extends Model{
    
    public $table = 'test';

    public function lists(){
       return $this->select($this->table,"*");
    }

    public function getOne($id){
        return $this->get($this->table,'*',array(
            'id'=>$id
        ));
    }
    public function updateOne($id,$data){
        return $this->update($this->table,$data, array(
            'id'=>$id
        ));
    }
    public function deleteOne($id){
        return $this->delete($this->table, array(
            'id'=>$id
        ));
    }

} 