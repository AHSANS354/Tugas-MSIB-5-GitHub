<?php
require 'konversiSuhu.php';

$suhu1 = new KonversiSuhu('Celsius', 24, 'Fahrenheit');
$suhu2 = new KonversiSuhu('Fahrenheit', 80, 'Celsius');


$suhu1->cetak();
?>