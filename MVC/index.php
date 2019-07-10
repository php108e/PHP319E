<?php 
require_once('database.php');

// Xử lý lấy dữ liệu 2 tham số 'controller' và 'action' trên URL

if (isset($_GET['controller'])) {
 	$controller = $_GET['controller'];
 	if (isset($_GET['action'])) {
 		$action = $_GET['action'];
 	}else{
 		$action = 'home';
 	}
 }else{
 	$controller = 'pages';
 	$action = 'home';
 } 

require_once('routes.php');
 ?>