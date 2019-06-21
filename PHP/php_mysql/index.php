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

	<?php
		include("dienthoai.php");
		$dt = new Dienthoai();
		$item = $dt->getAll();

	?>
	<div id="content" class="container">
		<!-- <div class="row">
			<div class="col-md-9">
				<div id="item" class="row">
					<?php
					// foreach ($item as $k=>$v){
					?>
					<div class="col-md-4">
						<img src="#" width="100%" height="150px">
						<div class="item-name"><?php //echo $v['tensp'];?></div>
						<div class="item-price"><?php //echo $v['giasp'];?></div>
						<div class="item-brand"><?php //echo $v['hang'];?></div>
					</div>
					<?php
					// }
					?>
				</div>
			</div>
			<div class="col-md-3">Right content</div>
		</div> -->

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












