	<!DOCTYPE html>
<html>
<head>
	<title>Chức năng sửa thông tin sản phẩm</title>
	<style type="text/css">
		table{
			width:70%;
			margin:10px auto;
		}
		input[type="text"], textarea{
			width:100%;
			line-height:30px;
			font-size:20pt;
		}
	</style>
	<script>
		function validate(){
			var ten = document.getElementById("tensp").value;
			var gia = document.getElementById("giasp").value;
			var sl = document.getElementById("soluong").value;
			var nam = document.getElementById("namsx").value;
			var hang = document.getElementById("hang").value;
			var tt = document.getElementById("tomtat").value;

			if(ten==""){
				document.getElementById("msgten").innerHTML = "Vui lòng nhập tên sản phẩm";
				document.getElementById("tensp").style.border= "1px solid red";
				status = false;
			}else{
				document.getElementById("tensp").style.border="";
				document.getElementById("msgten").innerHTML="";
			}

			var giaPattern = /^([0-9])$/;
			if(gia==""){
				document.getElementById("msggia").innerHTML = "Vui lòng nhập giá sản phẩm";
				document.getElementById("giasp").style.border= "1px solid red";
				status = false;
			}else{
				if(giaPattern.test(gia)==false){
					document.getElementById("msggia").innerHTML="Giá phải là số";
					document.getElementById("giasp").style.border="1px solid red";

					status = false;
				}else{
					document.getElementById("giasp").style.border="";
					document.getElementById("msggia").innerHTML="";
					status=  true;
				}
			}

			var slPattern = /^([0-9])$/;
			if(sl==""){
				document.getElementById("msgsl").innerHTML = "Vui lòng nhập số lượng sản phẩm";
				document.getElementById("soluong").style.border= "1px solid red";
				status = false;
			}else{
				if(slPattern.test(sl)==false){
					document.getElementById("msgsl").innerHTML="Số lượng phải là số";
					document.getElementById("soluong").style.border="1px solid red";

					status = false;
				}else{
					document.getElementById("soluong").style.border="";
					document.getElementById("msgsl").innerHTML="";
					status=  true;
				}
			}
			var namPattern = /^([0-9])$/;
			if(nam==""){
				document.getElementById("msgnamsx").innerHTML = "Vui lòng nhập năm sản xuất";
				document.getElementById("namsx").style.border= "1px solid red";
				status = false;
			}else{
				if(namPattern.test(sl)==false){
					document.getElementById("msgnamsx").innerHTML="Năm sai định dạng";
					document.getElementById("namsx").style.border="1px solid red";

					status = false;
				}else{
					document.getElementById("namsx").style.border="";
					document.getElementById("msgnamsx").innerHTML="";
					status=  true;
				}
			}

			if(hang==""){
				document.getElementById("msghang").innerHTML = "Vui lòng nhập tên hãng sản phẩm";
				document.getElementById("hang").style.border= "1px solid red";
				status = false;
			}else{
				document.getElementById("hang").style.border="";
				document.getElementById("msghang").innerHTML="";
			}

			if(tt==""){
				document.getElementById("msgtomtat").innerHTML = "Vui lòng nhập mô tả của sản phẩm";
				document.getElementById("tomtat").style.border= "1px solid red";
				status = false;
			}else{
				document.getElementById("tomtat").style.border="";
				document.getElementById("msgtomtat").innerHTML="";
			}
			
				if(status ==true){
					return true;
				}else{
					return false;
				}
				return false;
		
		}
	</script>
</head>
<body>
	<h1 style=""text-align:center>CHỨC NĂNG CẬP NHẬT SẢN PHẨM</h1>


	<?php
	$masp = $_GET['masp'];
	include("dienthoai.php");
	$dt = new Dienthoai();
	$row = $dt->getByMaSP($masp);
	
	if(isset($_POST['update'])){
        $msp = $_POST['masp'];
        $t = $_POST['tensp'];
		$g = $_POST['giasp'];
		$s = $_POST['soluong'];
		$n = $_POST['namsx'];
		$h = $_POST['hang'];
		$tt = $_POST['tomtat'];

		$dt = new Dienthoai();
		if($dt->update($masp,$msp,$t,$g,$s,$n,$h,$tt)==true){
			$_SESSION['status2'] = true;
			header("location:index.php");
		}else{
			$_SESSION['status2'] = false;
			header("location:index.php");
		}
	}

	?>

	<form action="update.php?masp=<?php echo $masp?>" method="post">
		<table>
            <tr>
				<td>Mã sản phẩm</td>
				<td>
					<input type="text" name="masp" id="masp" value="<?php echo $row['masp']?>">
				</td>
			</tr>
			<tr>
				<td>Tên sản phẩm</td>
				<td>
					<input type="text" name="tensp" id="tensp" value="<?php echo $row['tensp']?>">
					<span id="msgten"></span>
				</td>
			</tr>
			<tr>
				<td>Giá</td>
				<td>
					<input type="text" name="giasp" id="giasp" value="<?php echo $row['giasp']?>" >
					<span id="msggia"></span>
				</td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td>
					<input type="text" name="soluong" id="soluong" value="<?php echo $row['soluong']?>">
					<span id="msgsl"></span>
				</td>
			</tr>
			<tr>
				<td>Năm sản xuất</td>
				<td>
					<input type="text" name="namsx" id="namsx" value="<?php echo $row['namsx']?>">
					<span id="msgnamsx"></span>
				</td>
			</tr>
			<tr>
				<td>Hãng</td>
				<td>
					<input type="text" name="hang" id="hang" value="<?php echo $row['hang']?>">
					<span id="msghang"></span>
				</td>
			</tr>
			<tr>
				<td>Tóm tắt</td>
				<td>
					<textarea name="tomtat" cols="20" rows=""5 id="tomtat"><?php echo $row['tomtat']?></textarea>
					<span id="msgtomtat"></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="update" value="Cập nhật">
					<input type="reset" name="remove" value="Nhập lại">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>