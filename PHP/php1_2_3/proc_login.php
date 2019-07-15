<?php
//Kiểm tra sự tồn tại của hành động submit từ một trang nào đó
if(isset($_REQUEST['btnLogin'])){
	//Tiến hành lấy dữ liệu được gửi từ 'login.html'
	$user = $_REQUEST['txtUsername'];
	$pass = $_REQUEST['txtPassword'];

	echo "Xin chào: ". $user;
}else{
	//Điều hướng về trang 'login.html'
	header("location:login.html");
}

?>