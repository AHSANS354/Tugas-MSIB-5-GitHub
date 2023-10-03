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
    <title>Document</title>
</head>
<body>
    <h1>Bangun 2D</h1>
    <table>
        <thead>
            <tr>
                <?php foreach($arraytop as $h){
                    ?>
                <th><?= $h ?></th>
                <?php 
        } ?>
        </tr>
        </thead>
        <tbody>
            <tr>
                <?php $no = 1;
                foreach ($arrayobjek as $o) {
                    ?>
                    <td><?=$no++?></td>
                    <td><?=$o->namaBidang() ?></td>
                    <td><?=$o->keliling() ?></td>
                    <td><?=$o->luasbidang() ?></td>
                    <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>