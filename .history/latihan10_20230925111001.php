<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array 3</title>
</head>
<body>
    
<?php 
$m1 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m2 = ['nim'=>'0111112','nama'=>'ali','nilai'=>70];
$m3 = ['nim'=>'0111113','nama'=>'aji','nilai'=>60];
$m4 = ['nim'=>'0111114','nama'=>'tegar','nilai'=>65];
$m5 = ['nim'=>'0111115','nama'=>'affan','nilai'=>75];
$m6 = ['nim'=>'0111116','nama'=>'mail','nilai'=>80];
$m7 = ['nim'=>'0111117','nama'=>'johan','nilai'=>40];
$m8 = ['nim'=>'0111118','nama'=>'khasan','nilai'=>95];
$m9 = ['nim'=>'0111119','nama'=>'rahmad','nilai'=>50];
$m10 = ['nim'=>'0111110','nama'=>'royan','nilai'=>30];

$ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai','Keterangan', 'Grade', 'Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

?>

<h3 align='center'>Daftar Nilai Mahasiswa</h3>
<table border='1' cellpadding='10' cellspacing='1' width='100%'>
    <thead>
        <tr>
            <?php foreach($ar_judul as $judul){
                ?>
                <td><?= $judul ?></td>
            <?php } ?>
        </tr>
    </thead>
</table>

</body>
</html>