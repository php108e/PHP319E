<?php 
	class Database{
		protected $db;

		public function __construct(){
			$this->getConnection();
		}

		public function getConnection(){
			// Khợi tạo PDO làm việc với csdl
			$this->db = new PDO("mysql:host=localhost; dbname=DienthoaiDB;charset=UTF8;","root","");
		}
	}
 ?>