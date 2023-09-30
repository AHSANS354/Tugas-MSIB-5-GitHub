<?php
require 'bank.php';

$n1 = new Bank('001','Andi',600000);
$n2 = new Bank('002','Aji',700000);
$n3 = new Bank('003','Ahmad',800000);
$n4 = new Bank('004','budi',900000);
$n5 = new Bank('005','johan',1000000);

echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak();
echo '<hr>';
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();

?>