<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		#header, #footer{
			line-height: 100px;
			border: 1px solid red;
			margin-bottom: 10px;
		}

		#content{
			border: 1px solid green;
		}
	</style>
</head>
<body>
	<div id="header" class="container">Header</div>
	
	<div id="search" class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="index.php" method="post">
					<input type="text" name="txtSearch" class="form-control">
					<input type="submit" name="btnSearch" value="Tìm kiếm" class="btn btn-info form-control">
				</form>
			</div>
		</div>	
	</div>
	<p></p>

	<?php
		include("dienthoai.php");
		$dt = new Dienthoai();

		if(isset($_POST['btnSearch'])){
			//Lay du lieu trong form search
			$searchVal = $_POST['txtSearch'];
			if($searchVal!=""){
				$item = $dt->getAllByName($searchVal);
			}else{
				$item = $dt->getAll();
			}
		}else{
			$item = $dt->getAll();
		}

	?>
	<div id="content" class="container">
		<?php

		if(isset($_SESSION['status'])){
			if($_SESSION['status']==true){
				echo "<div class='alert alert-success'>Xoá dữ liệu thành công</div>";
			}else{
				echo "<div class='alert alert-danger'>Xoá dữ liệu thất bại</div>";
			}
		}
		?>
		<div class="row">
			<table class="table table-hover table-striped table-bordered">
				<tr>
					<th>TT</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Năm sản xuất</th>
					<th>Hãng</th>
					<th colspan="2">Chức năng</th>
				</tr>
				<?php
				foreach ($item as $k=>$v){
				?>
				<tr>
					<td><?php echo ($k+1);?></td>
					<td><?php echo $v['tensp'];?></td>
					<td><?php echo $v['giasp'];?></td>
					<td><?php echo $v['soluong'];?></td>
					<td><?php echo $v['namsx'];?></td>
					<td><?php echo $v['hang'];?></td>
					<td><a href="edit.php?masp=<?php echo $v['masp'];?>" class="btn btn-info">Sửa</a></td>
					<td><a href="delete.php?masp=<?php echo $v['masp'];?>" class="btn btn-danger">Xoá</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>

	<div id="footer" class="container">F</div>
</body>
</html>












