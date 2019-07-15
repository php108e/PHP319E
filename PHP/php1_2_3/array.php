<?php
//---- Khai báo mảng '$msg' ban đầu kiểu "Number" trong PHP -----
// $msg = array("chào", "mừng", "các");

//Truy xuất: Thêm phần tử cho mảng $msg
// $msg[] = "bạn";
// $msg[] = "lớp";
// $msg[] = "PHP0319E";

//Xử dụng vòng lặp 'for' để hiển thị thành chuỗi chứa các phần tử trong mảng
// echo "<pre>";
// print_r($msg);
// for ($i=0; $i < 6; $i++) { 
// 	echo $msg[$i]." ";
// }

//===== MẢNG KẾT HỢP =====
$product = array(
					'masp'	=>	'SP001',
					'tensp'	=>	'IphoneX',
					'gia'	=>	10,
					'hangsx'=>	'Apple' 
				);

// echo "<pre>";
// print_r($product);

//Duyệt từng phần tử trong mảng 'product'
// echo "Mã SP --- Tên SP ---- Giá --- Hãng<br>";
// foreach ($product as $k => $v) {
// 	echo $v " --- ";
// }

//===== MẢNG CỦA MẢNG - Multidimentional =====
$products = array(
	"sp1"	=> array("SP001","IphoneXS", 10, "Apple", false),
	"sp2"	=> array("SP002","Note 10", 8, "SamSung", true),
	"sp3"	=> array("SP003","Vivo", 6, "China", true)
);

// echo "<pre>";
// print_r($products);
?>

<table border="1">
	<tr>
		<th>Mã</th><th>Tên</th><th>Giá</th><th>Hãng</th><th>Tình trạng</th>
	</tr>

	<?php 
	foreach ($products as $k => $v) {
	?>

	<tr>
		<td><?php echo $v[0];?></td>
		<td><?php echo $v[1];?></td>
		<td><?php echo $v[2];?></td>
		<td><?php echo $v[3];?></td>
		<td>
			<?php 
			echo $v[4]==true? "Còn hàng" : "Hết hàng";
			?>
		</td>
	</tr>

	<?php
	}
	?>

</table>


















