<?php
require_once("controllers/base_controller.php");
require_once("models/post.php");

class PagesController extends BaseController {

	public function __construct(){
		$this->folder = "pages";
	}

	public function home(){
		//Nhận dữ liệu được trả về từ model Posts
		$posts = Posts::getAll();
		$data = array('posts' => $posts);
		$this->render('index',$data);
	}

	public function error(){
		$this->render('error');
	}
}
?>