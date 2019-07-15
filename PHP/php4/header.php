<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		Banner của website đặt tại đây.
		<?php
		if(isset($_SESSION['s_user'])){
			echo "Xin chao: ". $_SESSION['s_user'];

			echo "&nbsp;&nbsp;&nbsp;";
			
			echo "<a href='logout.php'>Đăng xuất</a>";
		}
		?>
	</div><!--End #Header-->
	<div id="content">