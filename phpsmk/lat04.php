<?php 

//operator matematika

$a = 4;
$b = 2;

$c1 = $a + $b;
$c2 = $a - $b;
$c3 = $a * $b;
$c4 = $a / $b;
$c5 = $a % $b;

echo $c1.'<br>';
echo $c2.'<br>';
echo $c3.'<br>';
echo round($c4).'<br>';
echo floor($c4).'<br>';
echo $c5.'<br>';

//operator logika

$c1 = $a < $b;
$c2 = $a < $b;
$c3 = $a == $b;
$c4 = $a != $b;

echo $c1;
echo $c2;
echo $c3;
echo $c4.'<br>';

//increment

$a++;
echo $a.'<br>';

//string

$kata = 'sura';
$kota = 'baya';
$hsl = $kata.$kota;

echo $hsl;

?>