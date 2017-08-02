<?php
	namespace Home\Model;
	use Think\Model;
	class UserLanguage extends Model {
		 protected $tableName = 'userlanguage';
		 protected $tablePrefix = ''; 

		 public function insert($data){
		 		

		 		
		 		$result=$this->addAll($data);

		 		return $result;
		 }

	}
?>
