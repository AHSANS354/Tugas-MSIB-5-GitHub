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
foreach($ar_buah as $id => $buah){
    echo '<br> Data Buah id : '.$id.' Adalah : '.$buah;
}
?>