<?php 

//array dimensi
// $nama = array("joni","tejo","budi",100,2.5);
// var_dump($nama);
// echo '<br>';
// echo $nama[4];
// echo '<br>';

// for ($i=0; $i < 5; $i++) { 
//     // echo $i;
//     echo $nama[$i].'<br>';
// }

// foreach ($nama as $key) {
//     echo $key.'<br>';
// }

//array asosiatif
$nama = array(
    "joni" => "jakarta",
    "siti" => "malang",
    "doni" => "baya",
    "jono" => "sura"
);
var_dump($nama);
echo '<br>';
// echo $nama['joni'];
echo '<br>';

foreach ($nama as $k => $v) {
    echo $k.' => '.$v;
    echo '<br>';
}

?>