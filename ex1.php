<?php
//-----------------
$a = true;
$b = true;
echo $a && $b; // Çıktı: 1 yani true (doğru)
echo $a and $b; // && işaretinin yerine and ifadesi de kullanılabilir.
//-----------------
$a = (true and false); // 0 (false)
echo $a. " (false) <br>";
// Parantez kaldırılıp denenebilir.
$a = true and false; // 1 (true)
echo $a. "(true) ";
echo "<hr width='250'  >";


//-------------------------------------
$ad="ismail";
$soyad="ersin";
echo "<b>".$ad." ".$soyad."</b><br>";
//-------------------------------------


$a = false;
$b =true;
echo $a || $b; // Çıktı: 1 yani true (iki değerden birinin doğru olması
echo "<br>";
echo $a OR $b; // || yerine Or ifadesi de yazılabilir.

//------------------

$a = (false or true); // 1 (true)
echo $a. " (true) <br>";
// aynı işlemi parantezleri kaldırarak deneyiniz.
$a = false or true; // 0 (false)
echo $a. " (false) ";

//-------------------
$a = 51;
$b = 61;
echo ($a == $b) || ($a < $b);


?>


