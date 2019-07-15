<?php
session_start();
if(isset($_GET['masp'])){
	$ma = $_GET['masp'];

	include("dienthoai.php");
	$dt = new Dienthoai();
	if($dt->remove($ma)==true){
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