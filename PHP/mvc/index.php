<?php
//Định nghĩa một hằng số làm đường dẫn cho tên miền
define("URL_BASE", "http://localhost/itplus/php0319E/PHP319E/PHP/mvc/");

require_once "database.php";

//Xử lý lấy dữ liệu 2 tham 'controller' và 'action' tren URL
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}else{
		$action = "home";
	}
}else{
	$controller = "pages";
	$action = "home";
}

require_once "routes.php";
?>