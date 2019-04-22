function validate(){
			//lấy dữ liệu của các đối tượng trong form
			var username = document.getElementById("txtUserName").value;
			var user = document.getElementById("txtUser").value;
			var pass = document.getElementById("txtPass").value;
			var repass = document.getElementById("txtRePass").value;
			var email = document.getElementById("txtEmail").value;
			var phone = document.getElementById("txtPhone").value;
			var adress = document.getElementById("txtAdress").value;

			if(username==""){
				document.getElementById("msgUserName").innerHTML = "Vui lòng nhập tên";
				document.getElementById("txtUserName").style.border= "1px solid red";
				status = false;
				status2 = false;
			}else{
				document.getElementById("txtUser").style.border="";
				document.getElementById("msgUser").innerHTML="";
				status=  true;
			}
			//Kiểm tra user
			var userPattern = /^(\S{5,64})$/;
			if(user == ""){
				//alert("Tên đăng nhập không được để trống.");
				document.getElementById("msgUser").innerHTML="Vui lòng nhập tên tài khoản";
				document.getElementById("txtUser").style.border="1px solid red";

				status = false;
				status2 = false;
			} else{
				if(userPattern.test(user)==false){
					document.getElementById("msgUser").innerHTML="Tên tài khoản không được có khoảng trắng";
					document.getElementById("txtUser").style.border="1px solid red";

					status = false;
					status2 = false;
				}else{
					document.getElementById("txtUser").style.border="";
					document.getElementById("msgUser").innerHTML="";
					status=  true;
				}
				//document.getElementById("msgUser").style.display = "none";		
			}

			// 8 ký tự, hoa + thường + số + kty dặc biệt
			var passPattern =/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]){8,}/;
			// . trùng khớp với 1 ký tự đơn bất kỳ ngoại trừ ký tự ngắt dòng (line-break) và cũng không lấy được ký tự có dấu (unicode).
			// ? Trùng khớp với 0 hoặc 1 lần ký tự đứng trước nó
			// * số lần lặp bất kì
			// ?= tìm trong chuỗi những đoạn cần đã có chưa
			if(pass == ""){
				//alert("Tên đăng nhập không được để trống.");
				document.getElementById("msgPass").innerHTML="Vui lòng nhập mật khẩu";
				document.getElementById("txtPass").style.border="1px solid red";
				status2 = false;
				status = false;
			} else{
				if(passPattern.test(pass)==false){
					document.getElementById("msgPass").innerHTML="Mật khẩu phải có ít nhất 8 ký tự";
					document.getElementById("txtPass").style.border="1px solid red";
					status2 = false;
					status = false;
				}else{
					//document.getElementById("msgUser").style.display = "none";
					document.getElementById("txtPass").style.border="";
					document.getElementById("msgPass").innerHTML="";
					status=  true;
				}
			}

			if(repass == ""){
				document.getElementById("msgRePass").innerHTML="Vui lòng nhập lại mật khẩu";
				document.getElementById("txtRePass").style.border="1px solid red";
				status2 = false;
				status = false;
			} else{
				if(pass != repass){
					document.getElementById("msgRePass").innerHTML="Nhập sai mật khẩu";
					document.getElementById("txtRePass").style.border="1px solid red";
					status2 = false;
					status = false;
				}else{
					document.getElementById("txtRePass").style.border="";
					document.getElementById("msgRePass").innerHTML="";
					status=  true;
				}
			}

			//Tạo biểu mẫu kiểm tra email
			//var emailPattern = /^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4}) $/;
			var emailPattern = /^([A-Za-z0-9_\-.+])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,})$/;
			//var emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(email == ""){
				//alert("Tên đăng nhập không được để trống.");
				document.getElementById("msgEmail").innerHTML="Vui lòng nhập Email";
				document.getElementById("txtEmail").style.border="1px solid red";
				status2 = false;
				status = false;
			} else{
				if(emailPattern.test(email)==false){
					document.getElementById("msgEmail").innerHTML="Sai định dạng!   vd: abcd@gmail.com";
					document.getElementById("txtEmail").style.border="1px solid red";
					status2 = false;
					status = false;
				}else{
					document.getElementById("txtEmail").style.border="";
					document.getElementById("msgEmail").innerHTML="";
					status=  true;
				}
			}

			//Tạo biểu mẫu kiểm tra sđt
			var moPattern = /^([0-9]{10,11})$/;

			if(phone == ""){
				//alert("Tên đăng nhập không được để trống.");
				document.getElementById("msgPhone").innerHTML="Vui lòng nhập số điện thoại";
				document.getElementById("txtPhone").style.border="1px solid red";
				status2 = false;
				status = false;
			} else{
				//Kiem tra dinh dang cua sdt
				if(moPattern.test(phone) == false){
					document.getElementById("msgPhone").innerHTML="Số điện thoại sai";
					document.getElementById("txtPhone").style.border="1px solid red";
					status2 = false;
					status = false;
				}else{
					document.getElementById("txtPhone").style.border="";
					document.getElementById("msgPhone").innerHTML="";
					status=  true;	
				}
				//document.getElementById("msgUser").style.display = "none";
				// document.getElementById("txtPhone").style.border="";
				// document.getElementById("msgPhone").innerHTML="";
				// status=  true;
			}

			if(adress=="")
				status = true;

			if(status2==false){
				if(status ==true){
					return true;
				}else{
					return false;
				}
				return false;
			}
		}