<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form input Penilaian</h1>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="masukan nama">
        <label for="">Mata Kuliah</label>
        <select name="matkul" id="">
            <option value="">-- pilihan Matakuliah --</option>
            <option value="">HTML & CSS</option>
            <option value="">Javascript</option>
            <option value="">UI/UX</option>
            <option value="">PHP</option>
        </select>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="masukkan nilai">
        <button name="proses" type="submit">Simpan</button>
    </form>
    <?php
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >= 60)? 'LULUS' : 'GAGAL';
    if($nilai >= 85 && $nilai <= 100) $grade = 'A';
    elseif ($nilai >75 && $nilai<=84 )$grade ='B';
    elseif ( $nilai>=60&& $nilai<=74)$grade='C' ;
    elseif( $nilai>=30 && $nilai<=59)$grade='D';
    elseif($nilai >= 0 && $nilai <=29)$grade='E';
    else $grade ='';

    switch ($grade) {
        case 'A':$predikat = 'Memuaskan';break;
        case 'B' : $predikat = 'Bagus';break;
        case 'C' : $predikat = 'Cukup'; break;
        case 'D' : $predikat = 'Kurang'; break;
        case 'E' : $predikat = 'Buruk'; break;
        
        default:
            $predikat = '';
            break;
    }
    ?>
</body>
</html>