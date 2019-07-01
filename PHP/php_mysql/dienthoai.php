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

	public function delete($msp){
		//Tạo kết nối CSDL

		//Tạo truy vấn theo chức năng
		$sql = "DELETE FROM dienthoai WHERE masp=".$msp."";
		
		//Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Thực thi truy vấn
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}

	public function update($macu,$msp,$t, $g, $s, $n, $h, $tt){
		//Tạo kết nối CSDL

		//Tạo truy vấn theo chức năng
		$sql = "UPDATE dienthoai SET masp='.$msp.',tensp='".$t."',giasp=".$g.",soluong=".$s.",namsx=".$n.",hang='".$h."',tomtat='".$tt."' WHERE masp=".$macu."";
		//echo $sql;
		//Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Thực thi truy vấn
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}

	public function getAll(){

		//Tạo truy vấn theo chức năng
		$sql = "SELECT * FROM dienthoai";
		
		//Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Thực thi truy vấn
		$stmt->execute();
		//B5: lấy dữ liệu từ Object và chuyển đổi 
		$arrDT = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$arrDT[] = $row;
		}
		return $arrDT;
	}

	public function getByMaSP($ma){
		$sql = "SELECT * FROM dienthoai WHERE masp = $ma";
        //Prepare cau truy van
		$stmt = $this->db->prepare($sql);

		//Thực thi truy vấn
		$stmt->execute();
		//B5: lấy dữ liệu từ Object và chuyển đổi 
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
		
	}
}
?>