<?php
//Xây dựng lớp tổng quát: Parent class
class Product
{
	protected $model;
	protected $name;
	protected $price;

	public function addProduct($m, $n, $p){
		$this->model = $m;
		$this->name  = $n;
		$this->price = $p;
	}

	public function getProduct(){
		echo "Thông tin sản phẩm:<br>Mã SP: ".$this->model."<br>Tên SP: ".$this->name."<br>Giá: ".$this->price;
	}
}
?>