<?php 
	/**
		 * 
		 */

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
				// Gọi hàm khởi tạo của lớp cha
				parent:: __construct();
			}

			public function add($tensp, $giasp, $soluong, $namsx, $hang, $tomtat){
				//Tạo kết nối với CSDL

				// Tạo truy vấn theo chức năng
				$query = "INSERT INTO dienthoai(tensp,giasp,soluong,namsx,hang,tomtat) VALUES ('".$tensp."',$giasp,$soluong,$namsx,'".$hang."','".$tomtat."')";
				//Prepare câu truy vấn
				$stmt = $this->db->prepare($query);
				// Thực thi truy vẩn
				if ($stmt->execute()) {
					return true;
				}
				else{
					return false;
				}
			}

			public function getAll(){
				// B1:Tạo kết nối

				// B2:Tạo truy vân theo chức năng
				$sql = "SELECT * FROM dienthoai";
				// B3:Prepare câu truy vấn
				$stmt = $this->db->prepare($sql);
				// B4:Thực thi câu truy vấn
				$stmt->execute();
				//B5: Lấy dữ liệu từ 'Object' và chuyển đổi sang kiểu mảng 'Array'
				$arrDT = array(); // cấp phát mảng Empty;
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$arrDT[] = $row;
				}
				return $arrDT;
			}

			public function remove($masp){
				$sql = "DELETE FROM dienthoai WHERE masp = $masp";

				$stmt = $this->db->prepare($sql);

				if ($stmt->execute()) {
					return true;
				}
				else{
					return false;
				}
			}

			public function getByMaSP($masp){
				// B1:Tạo kết nối

				// B2:Tạo truy vân theo chức năng
				$sql = "SELECT * FROM dienthoai WHERE masp = $masp";
				// B3:Prepare câu truy vấn
				$stmt = $this->db->prepare($sql);
				// B4:Thực thi câu truy vấn
				$stmt->execute();
				//B5: Lấy dữ liệu từ 'Object' và chuyển đổi sang kiểu mảng 'Array'
				
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				return $row;
			}

			public function edit($msp,$t, $g, $s, $n, $h, $tt){
				//Tạo kết nối CSDL

				//Tạo truy vấn theo chức năng
				$sql = "UPDATE dienthoai SET tensp='".$t."',giasp=$g,soluong=$s,namsx=$n,hang='".$h."',tomtat='".$tt."' WHERE masp=".$msp."";
				//Prepare cau truy van
				$stmt = $this->db->prepare($sql);

				//Thực thi truy vấn
				if($stmt->execute()==true){
					return true;
				}else{
					return false;
				}
			}

			public function getAllByName($searchValue){
				//Tạo kết nối CSDL

				// Tạo truy vấn theo chức năng
				$sql = "SELECT * FROM dienthoai WHERE tensp LIKE '%".$searchValue."%'";

				$stmt = $this->db->prepare($sql);
				// B4:Thực thi câu truy vấn
				$stmt->execute();
				//B5: Lấy dữ liệu từ 'Object' và chuyển đổi sang kiểu mảng 'Array'
				$arrDT = array(); // cấp phát mảng Empty;
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$arrDT[] = $row;
				}
				return $arrDT;
			}

		}	

?>