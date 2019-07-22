<?php 
	if (isset($_POST['add'])) {
		$t = $_POST['tensp'];
		$g = $_POST['giasp'];
		$s = $_POST['soluong'];
		$n = $_POST['namsx'];
		$h = $_POST['hang'];
		$tt = $_POST['tomtat'];

		include("dienthoai.php");

		$dt = new Dienthoai();
		if ($dt->add($t,$g,$s,$n,$h,$tt)) {
		 	echo "<div style='color:green;'>Thêm mới điện thoại thành công</div>";
		 }
		 else{
		 	echo "<div style='color:red;'>Thêm mới điện thoại thành công</div>";
		 } 
	}
 ?>