<?php
require_once 'Hewan1.php';
require_once 'Hewan2.php';
require_once 'Hewan3.php';

$h1 = new Kucing():
$h2 = new Kambing():
$h3 = new anjing();

$suara = [$h1, $h2, $h3];

foreach ($suara as $hewan){
    echo "Suara dari hewan ".$hewan->bersuara()." adalah <br>";
}
?>