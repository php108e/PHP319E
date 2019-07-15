<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!--Đặt tất cả liên kết tới các file JS, CSS tại đây-->
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/content.css">
</head>
<body>
	<div id="header" class="container">Header</div>
	<div id="content" class="container">
		<?= @$content ?>
	</div>
	<div id="footer" class="container">Footer</div>
</body>
</html>