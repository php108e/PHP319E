<?php
session_start();

if(isset($_POST['btnLogin'])){
	$user = $_POST['txtUsername'];
	$pass = $_POST['txtPassword'];
	

	//Kết nối với CSDL -> kiểm tra dữ liệu nhận được từ Client gửi lên
	$account = array(
			'admin' 	=>	'123456',
			'customer'	=>	'123'
	);

	foreach($account as $k => $v){
		if($user == $k && $pass == $v){
			//Tao phien lam viec
			$_SESSION['s_user'] = $user;
			header("location:index.php");
			break;
		}else{
			header("location:login.php");
		}
	}


}else{
	header("location:login.php");
}
?>