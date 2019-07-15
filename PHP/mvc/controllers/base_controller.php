<?php
class BaseController{
	//Khai báo thuộc tính 'folder' để chỉ định thư mục sẽ được render dữ liệu từ Controller khi đã có từ Model trả về
	protected $folder;

	public function render($file, $data = array()){
		//Tạo ra biến chỉ định file cụ thể sẽ được render dữ liệu từ controller
		$view_file = 'views/'. $this->folder. '/'. $file. '.php';

		if(is_file($view_file)){
			extract($data);
			ob_start();
			require_once($view_file);
			$content = ob_get_clean();

			require_once("views/layout/template.php");
		}else{
			header("location:index.php?controller=pages&action=error");
		}
	}

}
?>