<?php
class Database{
	protected $db;

	public function __construct(){
		$this->getConnection();
	}

	public function getConnection(){
		//Khởi tạo đối tượng PDO làm việc với CSDL
		$this->db = new PDO("mysql:host=localhost;dbname=DienthoaiDB;charset=utf8","root","");
	}
}
?>