<?php
class Maytinh
{
	public function phepcong($arrNumber){
		if(is_array($arrNumber)){
			$tong = 0;
			foreach($arrNumber as $number)
				$tong += $number;
			echo "Kết quả: ".$tong; 
		}else{
			echo "Xử lý cộng không thành công";
		}
	}
}


$pt = new Maytinh();
$numbers = array(10,20);
$pt->phepcong($numbers);


?>