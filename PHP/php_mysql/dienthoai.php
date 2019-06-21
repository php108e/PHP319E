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


	public function edit($m,$t, $g, $s, $n, $h, $tt){

	}

	public function remove($m){
		$sql = "DELETE FROM dienthoai WHERE masp=$m";
		$stmt = $this->db->prepare($sql);
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}

	public function getAll(){
		//B2: Tao truy van theo chuc nang
		$sql = "SELECT * FROM dienthoai";

		//B3: Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Buoc 4: Thuc thi truy van
		$stmt->execute();

		//B5: Lay du lieu tu 'Object' va chuyen doi sang kieu mang 'Array'
		$arrDT = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$arrDT[] = $row;
		}

		return $arrDT;
	}

	public function getByMaSP($ma){
		//B2: Tao truy van theo chuc nang
		$sql = "SELECT * FROM dienthoai WHERE masp=$ma";

		//B3: Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Buoc 4: Thuc thi truy van
		$stmt->execute();

		//B5: Lay du lieu tu 'Object' va chuyen doi sang kieu mang 'Array'
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}


}
?>








