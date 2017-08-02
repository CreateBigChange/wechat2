<?php
/**
 * Created by PhpStorm.
 * User: yxs
 * Date: 2017/6/10
 * Time: 20:28
 */
namespace Home\Model;
use Think\Model;
class UserLoginModel extends Model {
    protected $tableName = 'login';
    protected $tablePrefix = '';

    public function insert($data){

        $result=$this->add($data);
        return $result;
    }

}