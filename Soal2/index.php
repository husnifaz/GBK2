<!DOCTYPE html>
<html>
<head>
	<title>Validation Password</title>
</head>

<body>
	<form method="post">
	<label>Password : &emsp;
		<input type="text" name="pass">	
	</label>
	<input type="submit" name="cekpass" value="Cek">
	</form>
</body>
</html>

<?php 

if (isset($_POST['cekpass'])) {
	$pass=$_POST['pass'];
	return valPattern($pass);
}

function valPattern($val1){
	if (preg_match("/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $val1)) {
	 	echo "Password Valid";
	}else{
		echo "Password Tidak Valid";
	}
}

 ?>