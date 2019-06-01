<?php
	//Tạo biến x và y
	$x = 10;
	$y = 3;
	$z = $x/$y;

	//Chuyển kiểu dữ liệu của $z sang kiểu 'Integer'
	$z = settype($z, "integer");
	
	echo 'Kết quả x / y = '. $z; 
	//Kiểm tra kiểu dữ liệu của biến $z
	// echo gettype($k);

	//Cú pháp khai báo hằng số trong PHP
	define("PATH", "localhost/web1");
	//Truy cập hằng số
	echo "<hr>Truy cập theo đường dẫn: ". PATH;
?>