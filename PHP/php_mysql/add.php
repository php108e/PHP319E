<!DOCTYPE html>
<html>
<head>
	<title>Chức năng thêm mới điện thoại</title>
	<style type="text/css">
		table{
			width:70%;
			margin:10px auto;
		}
		input[type="text"], textarea{
			width:100%;
			line-height:30px;
			font-size:20pt;
		}
	</style>
</head>
<body>
	<h1 style=""text-align:center>CHỨC NĂNG THÊM MỚI ĐIỆN THOẠI</h1>


	<?php
	if(isset($_POST['add'])){
		$t = $_POST['tensp'];
		$g = $_POST['giasp'];
		$s = $_POST['soluong'];
		$n = $_POST['namsx'];
		$h = $_POST['hang'];
		$tt = $_POST['tomtat'];

		include("dienthoai.php");
		$dt = new Dienthoai();
		if($dt->add($t,$g,$s,$n,$h,$tt)==true){
			echo "<div style='color:green;'>Thêm mới điện thoại thành công.</div>";
		}else{
			echo "<div style='color:red;'>Quá trình thêm mới thất bại.</div>";
		}
	}
	?>

	<form action="add.php" method="post">
		<table>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensp"></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="giasp"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="soluong"></td>
			</tr>
			<tr>
				<td>Năm sản xuất</td>
				<td><input type="text" name="namsx"></td>
			</tr>
			<tr>
				<td>Hãng</td>
				<td><input type="text" name="hang"></td>
			</tr>
			<tr>
				<td>Tóm tắt</td>
				<td><textarea name="tomtat" cols="20" rows=""5></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="add" value="Thêm điện thoại">
					<input type="reset" name="remove" value="Nhập lại">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>