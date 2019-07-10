<?php 
// Khai báo các Controller và Action tương ứng sẽ có trên hệ thống;

$controllers = array(
	'pages' => ['home','error'],
	'users' => ['home','add', 'modify', 'remove','update']
);

// Kiểm tra xem khi người dùng truyền giá trị cho tham số 'controller' và 'action' trên URL có tồn tại trong mảng không 
if (!array_key_exists( $controller, $controllers) || !in_array($action, $controllers[$controller])) {
	$controller = 'pages';
	$action = 'error';
}

//Gọi tới file tương ứng với tên 'controller' trong thư mục 'controllers' đồng thời quy định cách đặt tên cho file đó
include_once('controllers/'. $controller. '_controller.php');

// Tiến hành thay thế những kí tự '_' bằng '' để quy định đặt tên cho lớp của controller đang truy cập
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
?>