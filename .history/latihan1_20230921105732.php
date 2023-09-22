<?php

//latihan membuat variabel
$namaSiswa = "Budi Santoso";
$umur = 25;
$beratBadan = 30.5;
$pekerjaan = 'Mahasiswa';

//contoh variable constanta
$jari2 = 15;
define('PHI', $jari2); //definisi konstanta
$luas = PHI * $jari2 * $jari2

echo '<br>Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan.' Kg.';
echo "<br>Pekerjaan : $pekerjaan <hr>";

?>
<p>siswa : <?= $namaSiswa ?></p>
<p>umur : <?= $umur ?></p>
<p>berat badan : <?= $beratBadan ?> kg</p>
<p>pekerjaan : <?= $pekerjaan ?></p>
<P>Luas : <?= $luas ?></P>