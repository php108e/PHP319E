<?php
$product = array("Mít", "Buổi", "Cam");

$items = array(
			"sp1" 	=> 	"Tôm",
			"sp3"	=>	"Ca",
			"sp2"	=>	"Cua"
			);

echo "<pre>";
echo "Mảng ban đầu:";
// print_r($product);
print_r($items);

// echo "Mảng product sau khi SX tăng dần: ";
// sort($product);
// print_r($product);
// echo "Mảng product sau khi SX giảm dần: ";
// rsort($product);
// print_r($product);

echo "Mảng items sau khi SX tăng dần theo giá trị:";
asort($items);
print_r($items);
echo "Mảng items sau khi SX giảm dần theo giá trị: ";
arsort($items);
print_r($items);

echo "Mảng items sau khi SX tăng dần theo key:";
ksort($items);
print_r($items);
echo "Mảng items sau khi SX giảm dần theo key: ";
krsort($items);
print_r($items);



?>