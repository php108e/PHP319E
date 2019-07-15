<?php
if(isset($_POST['btnUpload'])){
	$imgFile = $_FILES['imgFile'];

	//=== UPLOAD 1 FILE ===============================
	// $fName = $imgFile['name'];
	// $fType = $imgFile['type'];
	// $fSize = $imgFile['size'];
	// $fTmpname = $imgFile['tmp_name'];
	// $fError = $imgFile['error'];

	// //Kiểm tra định dạng và kích thước của file cần upload 

	// //Tiến hành upload file
	// if(move_uploaded_file($fTmpname, "hinhanh/".$fName)){
	// 	echo "Upload thành công!";
	// }


	//=== UPLOAD NHIỀU FILE ===============================
	for($i=0 ; $i<count($imgFile['name']) ; $i++){
			move_uploaded_file($imgFile['tmp_name'][$i], "hinhanh/".$imgFile['name'][$i]);
	}

}
?>