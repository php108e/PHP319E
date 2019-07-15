<?php
require_once("controllers/base_controller.php");

class UsersController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "users";
	}

	public function login(){
		$this->render("login");
	}

	public function login_process(){
		
	}

	public function logout(){
		
	}

	public function change(){
				
	}

	public function register(){
		$this->render("register");
	}


}
?>