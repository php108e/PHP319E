<?php 
/**
 * 
 */
class BaseController{
	// Khai báo thuộc tình 'folder' để chỉ định thư mục sẽ được render dữ liệu từ Controller khi đã có từ Model trả về

	protected $folder;
	public function render($file, $data=array()){
		//Tạo ra biến chỉ định file cụ thể sẽ được render dữ liệu controller
		$view_file = 'views/'. $this->folder. '/'. $file. '.php';
		if (is_file($view_file)) {
			extract($data);
			ob_start();
			require_once($view_file);
			$content = ob_get_clean();

			require_once('views/layouts/template.php');
		}else{
			// Nếu file muốn gọi ra không tồn tại thì chuyển hướng đến trang báo lỗi.
			header("location:index.php?controller=pages&action=error");
		}

	}
}
 ?>