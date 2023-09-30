<?php
require 'konversiSuhu.php';

$suhu1 = new KonversiSuhu('Celcius', 24, 'Fahrenheit');
$suhu2 = new KonversiSuhu('Fahrenheit', 80, 'Celcius');


$suhu1->cetak();
?>