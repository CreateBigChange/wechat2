<?php
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model {
		 protected $tableName = 'user';
		 protected $tablePrefix = ''; 

		 public function insert($data){
		 		
		 		
		 		$result=$this->add($data);


		 		return $result;
		 }

	}
?>
