function validate() {
	var dateform = document.getElementById('txtDateFrom').value;
	var dateto = document.getElementById('txtDateTo').value;
	var typeroom = document.getElementById('txtTypeRoom').value;
	var username = document.getElementById('txtUsername').value;
	var phone = document.getElementById('txtPhone').value;
	var email = document.getElementById('txtEmail').value;
	var content = document.getElementById('txtContent').value;

	var status = true;

	var regPhone = /^([0-9]{10,11})$/
	var regEmail = /^([a-zA-Z0-9]+\@+[a-zA-z]+\.+[a-z]{2,3})$/
	if (dateform == "") {
		document.getElementById('msgDateFrom').innerHTML = "Ngày đến không được để trống!";
		document.getElementById('txtDateFrom').style.borderColor = "red";
		status = false;
	} else {
		document.getElementById('msgDateFrom').innerHTML = "";
		document.getElementById('txtDateFrom').style.borderColor = "#ced4da";
	}

	if (dateto == "") {
		document.getElementById('msgDateTo').innerHTML = "Ngày đi không được để trống!";
		document.getElementById('txtDateTo').style.borderColor = "red";
		status = false;
	} else {
		document.getElementById('msgDateTo').innerHTML = "";
		document.getElementById('txtDateTo').style.borderColor = "#ced4da";
	}

	if (typeroom == "") {
		document.getElementById('msgTypeRoom').innerHTML = "Loại phòng không được để trống!";
		document.getElementById('txtTypeRoom').style.borderColor = "red";
		status = false;
	} else {
		document.getElementById('msgTypeRoom').innerHTML = "";
		document.getElementById('txtTypeRoom').style.borderColor = "#ced4da";
	}

	if (username == "") {
		document.getElementById('msgUsername').innerHTML = "Họ tên không được để trống!";
		document.getElementById('txtUsername').style.borderColor = "red";
		status = false;
	} else {
		document.getElementById('msgUsername').innerHTML = "";
		document.getElementById('txtUsername').style.borderColor = "#ced4da";
	}

	if (phone == "") {
		document.getElementById('msgPhone').innerHTML = "Số điện thoại không được để trống!";
		document.getElementById('txtPhone').style.borderColor = "red";
		status = false;
	} else {
		if (regPhone.test(phone) == false) {
			document.getElementById('msgPhone').innerHTML = "Số điện thoại không đúng định dạng!";
			document.getElementById('txtPhone').style.borderColor = "red";
			status = false;
		} else {
			document.getElementById('msgPhone').innerHTML = "";
			document.getElementById('txtPhone').style.borderColor = "#ced4da";
		}
	}

	if (email == "") {
		document.getElementById('msgEmail').innerHTML = "Email không được để trống!";
		document.getElementById('txtEmail').style.borderColor = "red";
		status = false;
	} else {
		if (regEmail.test(email) == false) {
			document.getElementById('msgEmail').innerHTML = "Email không đúng định dạng!";
			document.getElementById('txtEmail').style.borderColor = "red";
			status = false;
		} else {
			document.getElementById('msgEmail').innerHTML = "";
			document.getElementById('txtEmail').style.borderColor = "#ced4da";
		}
	}

	if (content == "") {
		document.getElementById('msgContent').innerHTML = "Nội dung không được để trống!";
		document.getElementById('txtContent').style.borderColor = "red";
		status = false;
	} else {
		document.getElementById('msgContent').innerHTML = "";
		document.getElementById('txtContent').style.borderColor = "#ced4da";
	}
	return status;
}

function clearform() {
	document.getElementById('msgDateFrom').innerHTML = "";
	document.getElementById('txtDateFrom').style.borderColor = "#ced4da";
	document.getElementById('msgDateTo').innerHTML = "";
	document.getElementById('txtDateTo').style.borderColor = "#ced4da";
	document.getElementById('msgTypeRoom').innerHTML = "";
	document.getElementById('txtTypeRoom').style.borderColor = "#ced4da";
	document.getElementById('msgUsername').innerHTML = "";
	document.getElementById('txtUsername').style.borderColor = "#ced4da";
	document.getElementById('msgEmail').innerHTML = "";
	document.getElementById('txtEmail').style.borderColor = "#ced4da";
	document.getElementById('msgPhone').innerHTML = "";
	document.getElementById('txtPhone').style.borderColor = "#ced4da";
	document.getElementById('msgContent').innerHTML = "";
	document.getElementById('txtContent').style.borderColor = "#ced4da";

}