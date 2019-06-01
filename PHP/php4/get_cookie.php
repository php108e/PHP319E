<?php
	echo "Giá trị của Cookie 'User': ". $_COOKIE['user'];
	// echo "<pre>";
	// print_r($_COOKIE);

	echo "<br>Gía trị của cookie 'Cart' là: ";
	$cart_result = (array)unserialize($_COOKIE['cart']);
	echo "<pre>";
	print_r($cart_result);
?>