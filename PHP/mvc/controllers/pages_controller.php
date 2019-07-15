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

	public function detail(){
		//lấy 'id' trên URL
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if(!empty($id)){
			$post = Posts::getPostById($id);
			$data = array('post' => $post);
			$this->render('detail',$data);
		}else{
			header("location:".URL_BASE);
		}
	}

	public function error(){
		$this->render('error');
	}
}
?>