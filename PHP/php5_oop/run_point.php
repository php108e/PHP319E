<!DOCTYPE html>
<html>
<head>
	<title>Thực thi đối tượng</title>
</head>
<body>
	<?php
		// $x = $_POST['txtX'];
		// $y = $_POST['txtY'];

		// $x1 = $_POST['txtXB'];
		// $y1 = $_POST['txtYB'];

		include("Point.php");
		//Khởi tạo đối tượng có kiểu cấu trúc dữ liệu là 'Point'
		$A = new Point(40,50);
		// $A->setX(10);
		// $A->setY(20);

		// $B = new Point();
		// $B->setX($x1);
		// $B->setY($y1);

		echo "Điểm A có toạ độ: A(". $A->getX() . "," . $A->getY(). ")";
		// echo "Điểm B có toạ độ: B(". $B->getX() . "," . $->getY(). ")"; 
	?>
</body>
</html>