<?php

//latihan membuat variabel
$namaSiswa = "Budi Santoso";
$umur = 25;
$beratBadan = 30.5;
$pekerjaan = 'Mahasiswa';

echo '<br>Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan.' Kg.';
echo "<br>Pekerjaan : $pekerjaan <hr>";

?>
<p>siswa : <?= $namaSiswa ?></p>
<p>umur : <?= $umur ?></p>
<p>berat badan : <?= $beratBadan ?> kg</p>
<p>pekerjaan : <?= $pekerjaan ?></p>