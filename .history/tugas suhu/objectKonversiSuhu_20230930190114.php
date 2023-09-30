<?php
require 'konversiSuhu.php';

$suhu1 = new KonversiSuhu('Celcius', 24, 'Fahrenheit');
$suhu2 = new KonversiSuhu('Fahrenheit', 80, 'Celcius');
$suhu3 = new KonversiSuhu('Celsius', 20, 'Rheamur');
$suhu4 = new KonversiSuhu('Rheamur', 40, 'Celcius')


$suhu1->cetak();
?>