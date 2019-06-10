<?php
session_start();

//Lấy giá trị của tham số 'modem' trên URL
$modem = isset($_GET['modem']) ? $_GET['modem'] : "";
if(isset($_COOKIE['cart'])){
	$_SESSION['cart'] = (array)unserialize($_COOKIE['cart']);
}
if(!empty($modem)){
	$quantity = 1;
	//Thực chất là đã có dữ liệu của sản phẩm cần cho vào giỏ được lấy từ CSDL theo 'modem'
	$item = array();

	if($modem=='a'){
		$item = array(
			$modem	=> array(
						'name'		=> 	'SmartTV SamSung 55ing',
						'price'		=>	17000000,
						'quantity'	=>	$quantity
						)
		);
	}

	if($modem=='b'){
		$item = array(
			$modem	=> array(
						'name'		=> 	'Điều hòa Panasonic',
						'price'		=>	7000000,
						'quantity'	=>	$quantity
						)
		);
	}

	if($modem=='c'){
		$item = array(
			$modem	=> array(
						'name'		=> 	'Lò vi sóng Asanzo',
						'price'		=>	1000000,
						'quantity'	=>	$quantity
						)
		);
	}

	if($modem=='d'){
		$item = array(
			$modem	=> array(
						'name'		=> 	'Loa Hamankadon 1000W',
						'price'		=>	20000000,
						'quantity'	=>	$quantity
						)
		);
	}

	//Kiem tra trong SESSION['cart'] co du lieu hay khong
	if(!empty($_SESSION['cart'])){
		//Kiem tra modem cua SP moi duoc them co trung voi modem cua SP da them truoc do vao trong gio hang
		if(in_array($modem, array_keys($_SESSION['cart']))){
			//Tang so luong trong gio hang cua SP da co
			foreach ($_SESSION['cart'] as $k => $v) {
				if($modem == $k){
					$_SESSION['cart'][$k]['quantity'] += 1;
				}
			}
		}else{
			//Gop SP moi vao SESSION['cart']
			$_SESSION['cart'] = array_merge($_SESSION['cart'],$item);
		}
	}else{
		$_SESSION['cart'] = $item;
	}
	setcookie("cart",serialize($_SESSION['cart']),time()+3600);

}else{
	header("location:index.php");
}
?>

<style type="text/css">
		body{
			font-size: 20px;
		}
		th{
			padding: 10px;
			text-align: center;
		}
		td{
			padding: 10px;
			text-align: center;
		}
		table{
			font-size: 20px;
			margin:10px auto;
			width: 80%;
		}
</style>

<?php
	if (isset($_SESSION['cart'])) {
		echo "<h2>THÔNG TIN GIỎ HÀNG</h2><br><hr>";
		if(empty($_SESSION['cart'])){
			echo "<div style='text-align:center;color:red'> Hiện không có sản phẩm nào trong giỏ hàng</div>";
		}else{
			echo "<table border='1'>";
			echo "<tr><th>Mã</th><th>Tên</th><th>Giá</th><th>Số lượng</th><th>Thành tiền</th></tr>";
			$total = 0;
			foreach($_SESSION['cart'] as $k => $v){
				$tt = $v['price']*$v['quantity'];
				echo "<tr>";
					echo "<td>".$k. "</td>";
					echo "<td>".$v['name']. "</td>";
					echo "<td>".number_format($v['price']). "₫</td>";
					echo "<td>".$v['quantity']. "</td>";
					echo "<td>".number_format($tt). "₫</td>";
				echo "</tr>";
				$total += $tt;
			}

			echo "<tr><th colspan='4' style='border: 1px solid red;'>Tổng tiền</th><th style='border: 1px solid red;'>".number_format($total)."₫</th></tr>";
			echo "</table>";
		}
	}
?>
