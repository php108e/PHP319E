<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chức năng xóa sản phẩm</title>
</head>
<body>
<h1>CHỨC NĂNG XÓA SẢN PHẨM</h1>
    <?php
	session_start();
	// if(isset($_POST['delete'])){
	// 	$msp = $_POST['id'];

	// 	include("dienthoai.php");
	// 	$dt = new Dienthoai();
	// 	if($dt->delete($msp)==true){
	// 		echo "<div style='color:green;'>Xóa thành công.</div>";
	// 	}else{
	// 		echo "<div style='color:red;'>Xóa thất bại.</div>";
	// 	}
	// }
	if(isset($_GET['masp'])){
		$ma = $_GET['masp'];
		include("dienthoai.php");
		$dt = new Dienthoai();
		if($dt->delete($ma)==true){
			$_SESSION['status'] = true;
			header("location:index.php");
		}else{
			$_SESSION['status'] = false;
			header("location:index.php");
		}
	}else{
		header("location:index.php");
	}
	?>
	
    <!-- <form action="delete.php" method="post">
        <input type="text" name="id">
        <input type="submit" name="delete" value="Xóa sản phẩm">
    </form> -->
</body>
</html>