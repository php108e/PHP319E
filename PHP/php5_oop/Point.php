<?php
//Định nghĩa cấu trúc cho một thực thể "Point"
/**
 * 
 */
class Point
{

	//Khai báo các thuộc tính (Properties) cho thực thể Point
	private $x;
	private $y;

	public function __construct($pX,$pY){
		$this->x = $pX;
		$this->y = $pY;
	}

	//Khai báo các phương thức (Methods) cho thực thể
	// public function setX($pX){
	// 	$this->x = $pX;
	// }

	// public function setY($pY){
	// 	$this->y = $pY;
	// }

	public function getX(){
		return $this->x;
	}

	public function getY(){
		return $this->y;
	}	
}


?>



