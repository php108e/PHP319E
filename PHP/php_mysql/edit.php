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
	$masp = $_GET['masp'];
	include("dienthoai.php");
	$dt = new Dienthoai();
	$row = $dt->getByMaSP($masp);

	if(isset($_POST['edit'])){
		$t = $_POST['tensp'];
		$g = $_POST['giasp'];
		$s = $_POST['soluong'];
		$n = $_POST['namsx'];
		$h = $_POST['hang'];
		$tt = $_POST['tomtat'];

		include("dienthoai.php");
		$dt = new Dienthoai();
		if($dt->edit($masp,$t,$g,$s,$n,$h,$tt)==true){
			echo "<div style='color:green;'>Thêm mới điện thoại thành công.</div>";
		}else{
			echo "<div style='color:red;'>Quá trình thêm mới thất bại.</div>";
		}
	}

	

	?>

	<form action="edit.php" method="post" onsubmit="return formValid();">
		<table>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensp" value="<?php echo $row['tensp'];?>"></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="giasp" value="<?php echo $row['giasp'];?>"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="soluong" value="<?php echo $row['soluong'];?>"></td>
			</tr>
			<tr>
				<td>Năm sản xuất</td>
				<td><input type="text" name="namsx" value="<?php echo $row['namsx'];?>"></td>
			</tr>
			<tr>
				<td>Hãng</td>
				<td><input type="text" name="hang" value="<?php echo $row['hang'];?>"></td>
			</tr>
			<tr>
				<td>Tóm tắt</td>
				<td><textarea name="tomtat" cols="20" rows="5"><?php echo $row['tomtat'];?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="edit" value="Cập nhật">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>