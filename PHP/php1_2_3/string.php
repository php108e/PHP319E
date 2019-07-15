<?php
//Tạo 1 biến $image là kết quả được trả về từ CSDL
$image = "may giat xin.jpg;dieu hoa.jpg;noi com dien.jpg";

//Sử dụng hàm explode để cắt chuỗi
$arrImg = explode(";", $image);

// echo "<pre>";
// print_r($arrImg);

?>
<div>
	<img src="<?php echo 'hinhanh/'.$arrImg[0]; ?>" width="250px" height="350px">
</div>

<div>
	<img src="<?php echo 'hinhanh/'.$arrImg[1]; ?>" width="50px" height="50px">
	<img src="<?php echo 'hinhanh/'.$arrImg[2]; ?>" width="50px" height="50px">	
</div>
