<!DOCTYPE html>
<html>
<head>
	<title>Jumlah Jabat Tangan</title>
</head>
<body>
	<form method="post">
		<label> Masukan Jumlah Orang &emsp;
			<input type="number" name="orang">
		</label>
		<input type="submit" name="submit1">
	</form>
	<br>
</body>
</html>


<?php 

$array_bil=array();


if (isset($_POST['submit1'])) {
	$jmlorang=$_POST['orang'];

	return count_handshake($jmlorang);
	
}

function count_handshake($value){

	$jumlah=0;
	for ($i=($value-1); $i >= 1; $i--) { 
			// echo "$i + ";
			$jumlah += $i;
		}
		echo "Jumlah jabat tangan yang terjadi selama pertemuan adalah $jumlah kali";
		
	}


 ?>
