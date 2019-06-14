<?php
include("database.php");
class Dienthoai extends Database
{
	private $masp;
	private $tensp;
	private $giasp;
	private $soluong;
	private $namsx;
	private $hang;
	private $tomtat;

	public function __construct(){
		parent::__construct();
	}

	public function add($t, $g, $s, $n, $h, $tt){
		//Tạo kết nối CSDL

		//Tạo truy vấn theo chức năng
		$sql = "INSERT INTO dienthoai(tensp,giasp,soluong,namsx,hang,tomtat) VALUES('".$t."',".$g.",".$s.",".$n.",'".$h."','".$tt."')";
		
		//Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Thực thi truy vấn
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}
	
}
?>