function validate() {
	var username = document.getElementById("txtUsername").value;

	var email = document.getElementById("txtEmail").value;

	var phone = document.getElementById("txtPhone").value;

	var day = document.getElementById("txtDay").value;
	var month = document.getElementById("txtMonth").value;
	var year = document.getElementById("txtYear").value;

	var reUsername = /^([a-zA-z]{40})$/;
	var reEmail = /^([a-zA-Z0-9]+\@+[a-zA-z]+\.+[a-z]{2,3})$/;
	var rePhone = /^([0-9]{10,11})$/;

	var status = true;

	if (reUsername.test(username) == false) {
		document.getElementById("msgUsername").innerHTML = "Nhập tối đa 40 kí tự!";
		document.getElementById("txtUsername").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgUsername").innerHTML = "";
		document.getElementById("txtUsername").style.borderColor = "#ced4da";
	}

	if (reEmail.test(email) == false) {
		document.getElementById("msgEmail").innerHTML = "Kiểm tra định dạng email!";
		document.getElementById("txtEmail").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgEmail").innerHTML = "";
		document.getElementById("txtEmail").style.borderColor = "#ced4da";
	}

	if (rePhone.test(phone) == false) {
		document.getElementById("msgPhone").innerHTML = "Bắt buộc nhập tối đa 10 ký tự số!";
		document.getElementById("txtPhone").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgPhone").innerHTML = "";
		document.getElementById("txtPhone").style.borderColor = "#ced4da";
	}

	if (day < 32 && month < 13 && year < 2006) {
		document.getElementById("msgBirth").innerHTML = "";
		document.getElementById("txtDay").style.borderColor = "#ced4da";
		document.getElementById("txtMonth").style.borderColor = "#ced4da";
		document.getElementById("txtYear").style.borderColor = "#ced4da";
	} else {
		document.getElementById("msgBirth").innerHTML = "Sai định dạng ngày tháng năm!";
		document.getElementById("txtDay").style.borderColor = "red";
		document.getElementById("txtMonth").style.borderColor = "red";
		document.getElementById("txtYear").style.borderColor = "red";
		status = false;
	}

	return status;
}

function clearform() {
	document.getElementById("txtUsername").value = "";

	document.getElementById("txtEmail").value = "";

 	document.getElementById("txtPhone").value= "";

	document.getElementById("txtDay").value= "";
	document.getElementById("txtMonth").value= "";
	document.getElementById("txtYear").value= "";

	document.getElementById("msgUsername").innerHTML = "";
	document.getElementById("txtUsername").style.borderColor = "#ced4da";

	document.getElementById("msgEmail").innerHTML = "";
	document.getElementById("txtEmail").style.borderColor = "#ced4da";

	document.getElementById("msgPhone").innerHTML = "";
	document.getElementById("txtPhone").style.borderColor = "#ced4da";

	document.getElementById("msgBirth").innerHTML = "";
	document.getElementById("txtDay").style.borderColor = "#ced4da";
	document.getElementById("txtMonth").style.borderColor = "#ced4da";
	document.getElementById("txtYear").style.borderColor = "#ced4da";
}