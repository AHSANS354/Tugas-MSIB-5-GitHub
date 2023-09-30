<?php
require 'Gempa.php';

$g1 = new Gempa('Banten', 1);
$g2 = new Gempa('Banten2', 2);
$g3 = new Gempa('Banten3', 3);
$g4 = new Gempa('Banten4', 1);
$g5 = new Gempa('Banten5', 4);


$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();
$g5->cetak();
?>