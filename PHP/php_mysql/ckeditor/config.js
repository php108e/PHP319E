/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

// CKEDITOR.editorConfig = function( config ) {
// 	// Define changes to default configuration here. For example:
// 	// config.language = 'fr';
// 	// config.uiColor = '#AADC6E';
// };
// CKEDITOR.editorConfig = function( config ) {
//     config.filebrowserBrowseUrl = './ckeditor/ckfinder/ckfinder.html';
//     config.filebrowserImageBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Images';
//     config.filebrowserFlashBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Flash';
//     config.filebrowserUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
//     config.filebrowserImageUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
//     config.filebrowserFlashUploadUrl = './ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
// };
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
   config.filebrowserBrowseUrl = 'ckfinder/ckfinder.html';
   config.filebrowserImageBrowseUrl = 'ckfinder/ckfinder.html?type=Images';
   config.filebrowserFlashBrowseUrl = 'ckfinder/ckfinder.html?type=Flash';
   config.filebrowserUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
   config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
   config.filebrowserFlashUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
}
config.filebrowserBrowseUrl = ‘http://localhost:8080/ckfinder/ckfinder.html’;
config.filebrowserImageBrowseUrl = ‘http://localhost:8080/ckfinder/ckfinder.html?type=Images’;
config.filebrowserFlashBrowseUrl = ‘http://localhost:8080/ckfinder/ckfinder.html?type=Flash’; 
config.filebrowserUploadUrl = ‘http://localhost:8080/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files’; 
config.filebrowserImageUploadUrl = ‘http://localhost:8080/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images’; 
config.filebrowserFlashUploadUrl = ‘http://localhost:8080/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash’;
