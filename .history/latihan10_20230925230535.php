<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

$nilai_tertinggi = max($mahasiswa,'nilai');

?>

<div class="container pt-5">

    <h3 align='center'>Daftar Nilai Mahasiswa</h3>
    <table class="table table-striped table-hover mt-5">
    <thead>
        <tr>
            <?php foreach($ar_judul as $judul){
                ?>
                <td><?= $judul ?></td>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($mahasiswa as $siswa){
            $ket = ($siswa['nilai'] >= 60)? 'Lulus' : 'Gagal';

            if($siswa['nilai'] >= 85 && $siswa['nilai'] <= 100) $grade="A";
            else if($siswa['nilai'] >= 75 && $siswa['nilai'] < 85) $grade="B";
            else if($siswa['nilai'] >= 60 && $siswa['nilai'] < 75) $grade="C";
            else if($siswa['nilai'] >= 30 && $siswa['nilai'] < 60) $grade="D"; 
            else if($siswa['nilai'] >= 0 && $siswa['nilai'] < 30) $grade="E";
            else $grade = "";

            switch($grade){
                case 'A' : $predikat = 'Memuaskan'; break;
                case 'B' : $predikat = 'Bagus'; break;
                case 'C' : $predikat = 'Cukup'; break;
                case 'D' : $predikat = 'Kurang'; break;
                case 'E' : $predikat = 'Buruk'; break;
                default : $predikat = '';
            }

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $siswa['nim'] ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>