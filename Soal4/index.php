<!DOCTYPE html>
<html>
<head>
   <title>Menentukan Kembalian</title>
</head>
<body>
   <form method="post">
      <label>Total Belanja anda :
      <input type="number" name="total"></label>
      <label>Uang anda :
      <input type="number" name="jmluang"></label>
      <input type="submit" name="submit" value="submit">
   </form>
   <br><br>
    <p></p>
</body>
</html>


<?php
   if (isset($_POST['submit'])) {
      $totalbelanja=$_POST['total'];
      $jmluang=$_POST['jmluang'];

      $uang=$jmluang-$totalbelanja;
      echo "Berikut uang kembalian anda : $uang <br><br>";

   return Kembalian($uang);
   }
   
  

function Kembalian($sisa){
   $uang=array(50000,20000,10000,5000,2000,1000,500);

   if ($sisa >=50000) {
      $i=0;
   }else if ($sisa >=20000 && $sisa<50000 ) {
      $i=1;
   }else if ($sisa >=10000 && $sisa<20000) {
      $i=2;
   }else if ($sisa >=5000 && $sisa<10000) {
      $i=3;
   }else if ($sisa >=2000 && $sisa<5000) {
      $i=4;
   }else if ($sisa >=1000 && $sisa<2000) {
      $i=5;
   }else if ($sisa >=500 && $sisa<1000 ) {
      $i=6;
   }
   else{
    echo "Uang tidak cukup !!!";  
   }
   
   do{
	   $buffhasil=intval($sisa / $uang[$i]);
	   $buffsisa=$sisa % $uang[$i];
	   echo "Uang $uang[$i] Sebanyak $buffhasil <br>";
      $hasil=$buffhasil;
      $sisa=$buffsisa;
      $i++;
   }
   while ($sisa!=0);
}
?> 