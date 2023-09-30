<?php
require 'konversiSuhu.php';

$suhu1 = new KonversiSuhu('Celcius', 24, 'Fahrenheit');
$suhu2 = new KonversiSuhu('Fahrenheit', 80, 'Celcius');
$suhu3 = new KonversiSuhu('Celcius', 20, 'Rheamur');
$suhu4 = new KonversiSuhu('Rheamur', 40, 'Celcius');

echo '<h1 align="center">Konversi Suhu</h1>';
echo '<table border="1">';
echo '<tr><th>Satuan suhu awal</th><th>Besaran Suhu</th><th>Satuan suhu tujuan</th><th>Hasil konversi</th></tr>';
echo '<tr>';
$suhu1->cetak();
$suhu2->cetak();
$suhu3->cetak();
$suhu4->cetak();
echo '</tr>';
echo '</table>';
?>