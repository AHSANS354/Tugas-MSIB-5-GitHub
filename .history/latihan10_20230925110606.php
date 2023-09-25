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
$m2 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m3 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m4 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m5 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m6 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m7 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m8 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m9 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];
$m10 = ['nim'=>'0111111','nama'=>'Danu','nilai'=>95];

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