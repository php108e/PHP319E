<?php session_start() ?>
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


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;"><h2>CHỨC NĂNG CẬP NHẬT</h2><hr></div>		
		</div>
		<?php
				$masp = $_GET['masp'];
				include("dienthoai.php");
				$dt = new Dienthoai();
				$row = $dt->getByMaSP($masp);

				if (isset($_POST['edit'])) {
					$t = $_POST['tensp'];
					$g = $_POST['giasp'];
					$s = $_POST['soluong'];
					$n = $_POST['namsx'];
					$h = $_POST['hang'];
					$tt = $_POST['tomtat'];

					if ($dt->edit($masp,$t,$g,$s,$n,$h,$tt)) {
						$_SESSION['status2'] = true;
						header("location:index.php");
					}else{
						$_SESSION['status2'] = false;
						header("location:index.php");
					}
				}
		 ?>

		<div class="row">
			<div class="col-md-12">
				<form action="edit.php?masp=<?php echo $masp?>" method="post" onsubmit="return validate();">
					<table border="0px" class="table table-borderless">
						<tr>
							<td width="200px"><label>Tên sản phẩm</label></td>
							<td><input id="tensp" type="text" name="tensp" class="form-control" value="<?php echo $row['tensp'];?>"></td>
						</tr>

						<tr>
							<td><label>Giá sản phẩm</label></td>
							<td><input id="giasp" type="text" name="giasp" class="form-control" value="<?php echo $row['giasp'];?>"></td>
						</tr>

						<tr>
							<td><label>Số lượng</label></td>
							<td><input id="soluong" type="text" name="soluong" class="form-control" value="<?php echo $row['soluong'];?>"></td>
						</tr>

						<tr>
							<td><label>Năm sản xuất</label></td>
							<td><input id="namsx" type="text" name="namsx" class="form-control" value="<?php echo $row['namsx'];?>"></td>
						</tr>

						<tr>
							<td><label>Hãng</label></td>
							<td><input id="hang" type="text" name="hang" class="form-control" value="<?php echo $row['hang'];?>"></td>
						</tr>

						<tr>
							<td><label>Tóm tắt</label></td>
							<td><textarea id="tomtat" name="tomtat" cols="20" rows="5" class="form-control"><?php echo $row['tomtat'];?></textarea></td>
							<script type="text/javascript">
								CKEDITOR.replace("tomtat");
							</script>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Cập nhật" class="btn btn-success">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>	
	</div>
</body>
</html>
