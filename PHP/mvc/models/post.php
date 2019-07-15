<?php
class Posts{
	//Khai báo thuộc tính đại diện cho tên cột trong bảng 'Posts' dưới CSDL
	public $id;
	public $title;
	public $content;

	public static function getAll(){
		$objDb = DB::getConnection();
		$sql = "SELECT * FROM Posts";
		$stmt = $objDb->prepare($sql);
		$stmt->execute();
		$items = [];
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

}
?>