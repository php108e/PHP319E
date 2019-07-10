<?php 
require_once('controllers/base_controller.php');

class PagesController extends BaseController{

	public function __construct(){
		$this->folder = 'pages';
	}

	public function home(){
		// Thử nghiệm dữ liệu sau khi được trả về từ model
		$data = array("Đại","Hoa","Nam");
		$this->render('index',$data);
	}
	public function error(){

	}
}
 ?>
