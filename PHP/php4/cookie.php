<?php
	$cart = array(
		'p1' => array('A',1,10),
		'p2' => array('B',2,5)
	);
	setcookie("cart",serialize($cart), time()+3600);
?>