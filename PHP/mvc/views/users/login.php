<div id="login-form">
	<form action="<?php echo URL_BASE. '?controller=users&action=login_process';?>" method="post">
		<table class="table table-hover">
			<tr>
				<td>Địa chỉ email</td>
				<td>
					<input type="text" name="txtEmail" class="form-control">
				</td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td>
					<input type="password" name="txtPassword" class="form-control">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btnLogin" class="form-control btn btn-success" value="Đăng nhập">
				</td>
			</tr>
		</table>
	</form>
</div>