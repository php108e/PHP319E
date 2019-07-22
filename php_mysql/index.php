<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<style type="text/css">
		#header, #footer{
			line-height: 100px;
			border: 1px solid red;
			margin-bottom: 15px
		}

		#footer{
			line-height: 100px;
			border: 1px solid red;
			margin-top: 15px
		}

		#content{
			border: 1px solid green;
		}
	</style>
</head>
<body>
	<div id="header" class="container">Header</div>
	<div id="content" class="container">
		<!-- <div class="row">
			<div class="col-md-9">
				<div id="item" class="row">
					<?php //foreach ($item as $key => $value) {
						# code...
					?>
						<div class="col-md-4">
							<img src="#" width="100%" height="150px">
							<div class="item-name"><?php //echo $value['tensp'] ?></div>
							<div class="item-price"><?php //echo $value['giasp'] ?></div>
							<div class="item-brand"><?php //echo $value['hang'] ?></div>
						</div>
					<?php 
						//}
					?>
				</div>
			</div>
			<div class="col-md-30">Right content</div>
		</div> -->

		 <div class="row">
		 	<div class="col-md-5">
		 		<?php 
					//session_unset('status');
					if (isset($_SESSION['status'])) {
						if ($_SESSION['status'] == true) {
							echo "<div class='alert alert-success'> Xóa sản phẩm thành công</div>";
							unset($_SESSION['status']);
						}else{
							echo "<div class='alert alert-danger'> Xóa sản phẩm thất bại</div>";
							unset($_SESSION['status']);
						}
					}

					if(isset($_SESSION['status2'])){
			            if($_SESSION['status2']==true){
			                echo "<div class='alert alert-success'>Update dữ liệu thành công</div>";
			                unset($_SESSION['status2']);
			            }else{
			                echo "<div class='alert alert-success'>Update dữ liệu thất bại</div>";
			                unset($_SESSION['status2']);
			            }
			        }
				 ?>
		 	</div>

		 	<div class="col-md-5">
		 		<form class="form-inline" action="index.php" method="post" style="margin-top: 10px; margin-left: 50px;">
					<input class="form-control mr-sm-3" type="text" name="txtSearch" id="txtSearch" placeholder="search. . ." aria-label="Search">
					<span class="glyphicon glyphicon-search"></span> 
					<input type="submit" name="btnSearch" class="btn btn-info btn-rounded btn-md" value="Tìm kiếm">
				</form>
		 	</div>
		 	<div class="col-md-2" style="margin-top: 10px;"><a href="add.php" class="btn btn-info">Thêm mới</a></div>
		 </div>

		 <?php 
		 	include("dienthoai.php");
		 	$dt = new Dienthoai();
		 	if (isset($_POST['btnSearch'])) {
		 		// Lấy dữ liệu trong Form Search
		 		$searchValue = $_POST['txtSearch'];
		 		if ($searchValue != "") {
		 			$item = $dt->getAllByName($searchValue);
		 		}
		 		else{
			 		$item = $dt->getAll();
		 		}
		 	}else{
		 		$item = $dt->getAll();
		 	}

		  ?>

		<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-striped table-borderd"> 
						<tr>
							<th>TT</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Năm sản xuất</th>
							<th>Hãng</th>
							<th>Tóm tắt</th>
							<th colspan="2">Chức năng</th>
						</tr>
						<?php foreach ($item as $key => $value) {
							
						?>
							<tr>
								<td><?php echo ($key+1); ?></td>
								<td><?php echo $value['tensp']; ?></td>
								<td><?php echo $value['giasp']; ?></td>
								<td><?php echo $value['soluong']; ?></td>
								<td><?php echo $value['namsx']; ?></td>
								<td><?php echo $value['hang']; ?></td>
								<td><?php echo $value['tomtat']; ?></td>
								<td><a href="edit.php?masp=<?php echo $value['masp'];?>" class="btn btn-info">Sửa</a></td>
								<td><a href="delete.php?masp=<?php echo $value['masp'];?>" class="btn btn-danger">Xóa</a></td>
							</tr>
						<?php 
						}
						?>
					</table>
				</div>
		</div>
	</div>

	<div id="footer" class="container">Footer</div>
</body>
</html>