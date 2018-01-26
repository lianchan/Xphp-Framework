<?php
namespace app\model;
use core\lib\Model;

class guestbookModel extends Model{

    public $table = 'guestbook';

    public function all(){
        return $this->select($this->table,"*");
    }

    public function addOne($data){
        return $this->insert($this->table, $data);
    }

    public function deleteOne($id){
        return $this->delete($this->table, array(
            'id'=>$id
        ));
    }
}