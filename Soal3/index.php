<!DOCTYPE html>
<html>
<head>
  <title>Garis Miring</title>
</head>
<body>
  <form method="post">
    <label> Masukan Jumlah Bintang &emsp;
      <input type="number" name="input">
    </label>
    <input type="submit" name="submit">
  </form>
  <br>
</body>
</html>



<?php 

if (isset($_POST['submit'])) {
  $a=$_POST['input'];

    return drawLine($a);

}
  

function drawLine($a){
for ($b=1; $b <= $a; $b++) { 
    for ($c=1; $c <= $b; $c++) 
        echo "&emsp;";
        echo "*";
        echo "<br>";
    }
}


 ?>