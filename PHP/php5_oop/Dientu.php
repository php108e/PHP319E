<?php
include("Product.php");

class Dientu extends Product
{
	//Khai báo thêm thuộc tính mới của lớp 'Dientu'
	public $discount;

	public function addDiscount($d){
		$this->discount = $d;
	}

	public function getDiscount(){
		echo "<br>Giảm giá: ".$this->discount. "%";
	}
	public function giamoi(){
		$new = $this->price - ($this->price * $this->discount )/100;
		echo "<br>gia moi: ". $new;
	}

}

$dt = new Dientu();

//Truy cập tới thành phần của lớp cha thông qua lớp con
$dt->addProduct("SP01","Điều hoà cả nhà vui", 3000000);
$dt->addDiscount(5);
$dt->getProduct();
$dt->getDiscount();
$dt->giamoi();





?>