<?php 
//Biến cục bộ: Local
$age = 30;

// //Định nghĩa ra hàm 'birthday'
// function birthday(){
// 	echo $age;
// }

// //Lời gọi hàm
// birthday();

function birthday(){
	global $age;
	echo $age;
}

birthday();
?>