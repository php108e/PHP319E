<?php
	include("header.php");
?>

<fieldset>
		<legend>Chức năng đăng nhập</legend>

		<form action="proc_login.php" method="post">
			<label>Tên đăng nhập</label>
			<input type="text" name="txtUsername"><br>
			<label>Mật khẩu</label>
			<input type="password" name="txtPassword"><br>
			<label></label>
			<input type="submit" name="btnLogin" value="Đăng nhập">
			<input type="reset" name="btnReset" value="Nhập lại">
		</form>

</fieldset>

<?php
	include("footer.php");
?>