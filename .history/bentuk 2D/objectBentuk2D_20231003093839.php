<?php
require_once 'Lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran1 = new Lingkaran(6);
$lingkaran2 = new Lingkaran(8);

$persegipanjang1 = new PersegiPanjang(7, 4);
$persegipanjang2 = new PersegiPanjang(10, 5);

$segitiga1 = new Segitiga(3, 5);
$segitiga2 = new Segitiga(4, 8);

$arraytop = ['No','Nama Bidang','Keliling Bidang','Luas Bidang'];
$arrayobjek = [$lingkaran1,$lingkaran2,$persegipanjang1,$persegipanjang2,$segitiga1,$segitiga2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 6 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Bangun 2D</h1>
    <table class="table">
  <thead>
    <tr>
      <?php foreach($arraytop as $h){
        ?>
        <th scope="col"><?= $h ?></th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
    foreach($arrayobjek as $x){
    ?>
    <td><?= $no++ ?></td>
    <td><?= $x->namaBidang() ?></td>
    <td><?= $x->keliling() ?></td>
    <td><?= $x->luasbidang() ?></td>
    <?php } ?>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>