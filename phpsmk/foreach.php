<?php 

// $nama = array('tejo', 'budi', 'siti', 100);
// var_dump($nama);

// echo '<br>';

// foreach ($nama as $key) {
//     echo $key.'<br>';
// }

$nama = array(
    'tejo' => 'surabaya',
    'siti' => 'sura',
    'budi' => 'baya'
);
var_dump($nama);
echo '<br>';
foreach ($nama as $key => $value) {
    echo $key.'-'.$value;
    echo '<br>';
}

?>