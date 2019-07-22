<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewprot" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chức năng thêm mới điện thoại</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<style type="text/css">
		label{
			font-weight: bold;
		}
		.note{
			color: red;
			font-style: italic;
		}

	</style>

	<script>
		
		function validate() {
			var tensp = document.getElementById("tensp").value;
			var giasp = document.getElementById("giasp").value;
			var soluong = document.getElementById("soluong").value;
			var namsx = document.getElementById("namsx").value;
			var hang = document.getElementById("hang").value;
			var tomtat = document.getElementById("tomtat").value;

			var pattern = /^([0-9]{1,})$/;

			var status = true;

			if (tensp == "") {
				document.getElementById("msgTensp").innerHTML = "Không được để trống!";
				document.getElementById("tensp").style.borderColor = "red";
				status = false;
			} else {
				document.getElementById("msgTensp").innerHTML = "";
				document.getElementById("tensp").style.borderColor = "#ced4da";
			}

			if (giasp == "") {
				document.getElementById("msgGiasp").innerHTML = "Không được để trống!";
				document.getElementById("giasp").style.borderColor = "red";
				status = false;
			} else {
				if (pattern.test(giasp) == false) {
					document.getElementById("msgGiasp").innerHTML = "Giá phải định dạng kiểu số";
					document.getElementById("giasp").style.borderColor = "red";
					status = false;
				} else {
					document.getElementById("msgGiasp").innerHTML = "";
					document.getElementById("tensp").style.borderColor = "#ced4da";
				}
			}

			if (soluong == "") {
				document.getElementById("msgSoluong").innerHTML = "Không được để trống!";
				document.getElementById("soluong").style.borderColor = "red";
				status = false;
			} else {
				if (pattern.test(giasp) == false) {
					document.getElementById("msgSoluong").innerHTML = "Số lượng phải định dạng kiểu số";
					document.getElementById("soluong").style.borderColor = "red";
					status = false;
				} else {
					document.getElementById("msgSoluong").innerHTML = "";
					document.getElementById("soluong").style.borderColor = "#ced4da";
				}				
			}

			if (namsx == "") {
				document.getElementById("msgNamsx").innerHTML = "Không được để trống!";
				document.getElementById("namsx").style.borderColor = "red";
				status = false;
			} else {
				document.getElementById("msgNamsx").innerHTML = "";
				document.getElementById("namsx").style.borderColor = "#ced4da";
			}

			if (hang == "") {
				document.getElementById("msgHang").innerHTML = "Không được để trống!";
				document.getElementById("hang").style.borderColor = "red";
				status = false;
			} else {
				document.getElementById("msgHang").innerHTML = "";
				document.getElementById("hang").style.borderColor = "#ced4da";
			}

			if (tomtat == "") {
				document.getElementById("msgTomtat").innerHTML = "Không được để trống!";
				document.getElementById("tomtat").style.borderColor = "red";
				status = false;
			} else {
				document.getElementById("msgTomtat").innerHTML = "";
				document.getElementById("tomtat").style.borderColor = "#ced4da";
			}
			return status;
		}	
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;"><h2>CHỨC NĂNG THÊM MỚI ĐIỆN THOẠI</h2><hr></div>
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
					 	echo "<div style='color:red;'>Thêm mới điện thoại không thành công</div>";
					 } 
				}
			 ?>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<form action="add.php" method="post" onsubmit="return validate();">
					<table border="0px" class="table table-borderless">
						<tr>
							<td width="200px"><label>Tên sản phẩm</label></td>
							<td><input id="tensp" type="text" name="tensp" class="form-control"></td>
							<td><span id="msgTensp" class="note"></span></td>
						</tr>

						<tr>
							<td><label>Giá sản phẩm</label></td>
							<td><input id="giasp" type="text" name="giasp" class="form-control"></td>
							<td><span id="msgGiasp" class="note"></span></td>
						</tr>

						<tr>
							<td><label>Số lượng</label></td>
							<td><input id="soluong" type="text" name="soluong" class="form-control"></td>
							<td><span id="msgSoluong" class="note"></span></td>
						</tr>

						<tr>
							<td><label>Năm sản xuất</label></td>
							<td><input id="namsx" type="text" name="namsx" class="form-control"></td>
							<td><span id="msgNamsx" class="note"></span></td>
						</tr>

						<tr>
							<td><label>Hãng</label></td>
							<td><input id="hang" type="text" name="hang" class="form-control"></td>
							<td><span id="msgHang" class="note"></span></td>
						</tr>

						<tr>
							<td><label>Tóm tắt</label></td>
							<td><textarea id="tomtat" name="tomtat" cols="20" rows="5" class="form-control"></textarea>
								<script type="text/javascript">
									CKEDITOR.replace("tomtat");
								</script>
							</td>
							<td><span id="msgTomtat" class="note"></span></td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="add" value="Thêm điện thoại" class="btn btn-success">
								<input type="reset" name="remove" value="Nhập lại" class="btn btn-danger">
							</td>
							<td><a href="index.php" class="btn btn-info" style="width: 100px;">Trang chủ</a></td>
						</tr>
					</table>
				</form>
			</div>

		</div>
		
	</div>
</body>
</html>