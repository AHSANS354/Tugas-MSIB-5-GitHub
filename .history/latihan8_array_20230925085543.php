<?php

$ar_buah = ['pepaya','mangga','pisang','jambu'];
$ar_buah[] ='melon';
$ar_buah[] = 'semangka';

echo'Cetak data array menggunakan looping foreach';
foreach ($ar_buah as $key => $buah) {
    echo'<br>key array : '.$key;
}
foreach($ar_buah as $buah){
    echo'<br>Data buah : '.$buah;
}
?>