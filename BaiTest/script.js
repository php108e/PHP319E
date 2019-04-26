function validate() {
	var name = document.getElementById("txtName").value;
	var phone = document.getElementById("txtPhone").value;
	var email = document.getElementById("txtEmail").value;
	var address = document.getElementById("txtAddress").value;
	var content = document.getElementById("txtContent").value;

	var status = true;

	if (name == "") {
		document.getElementById("msgName").innerHTML ="yêu cầu không được để trống";
		document.getElementById("txtName").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgName").innerHTML ="";
		document.getElementById("txtName").style.borderColor = "ced4da";
	}

	if (phone == "") {
		document.getElementById("msgPhone").innerHTML ="yêu cầu không được để trống";
		document.getElementById("txtPhone").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgPhone").innerHTML ="";
		document.getElementById("txtPhone").style.borderColor = "ced4da";
	}

	if (email == "") {
		document.getElementById("msgEmail").innerHTML ="yêu cầu không được để trống";
		document.getElementById("txtEmail").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgEmail").innerHTML ="";
		document.getElementById("txtEmail").style.borderColor = "ced4da";
	}

	if (address == "") {
		document.getElementById("msgAddress").innerHTML ="yêu cầu không được để trống";
		document.getElementById("txtAddress").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgAddress").innerHTML ="";
		document.getElementById("txtAddress").style.borderColor = "ced4da";
	}
	if (content == "") {
		document.getElementById("msgContent").innerHTML ="yêu cầu không được để trống";
		document.getElementById("txtContent").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgContent").innerHTML ="";
		document.getElementById("txtContent").style.borderColor = "ced4da";
	}

	if (status == false) {
		return false;
	} else {
		return true;
	}
}