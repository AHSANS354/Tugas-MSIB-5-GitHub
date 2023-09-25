<?php
//array scalar
$a1 = ['kode' => '001', 'buah' => 'Apel', 'harga' => 25000, 'jumlah' => 5];
$a2 = ['kode' => '002', 'buah' => 'mangga', 'harga' => 30000, 'jumlah' => 6];
$a3 = ['kode' => '003', 'buah' => 'pisang', 'harga' => 35000, 'jumlah' => 7];
$a4 = ['kode' => '004', 'buah' => 'jambu', 'harga' => 40000, 'jumlah' => 8];
$a5 = ['kode' => '005', 'buah' => 'durian', 'harga' => 45000, 'jumlah' => 9];

//array asossiative
$ar_buah = [$a1,$a2,$a3,$a4,$a5];
//deklarasi header table dengan looping
$ar_judul = ['No','Kode','Buah','Harga','Jumlah beli','Harga kotor','Diskon','Harga bayar'];
$jumlah_transaksi = count($ar_buah);
$jumlah_harga = array_column($ar_buah,'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_rata2 = $harga_total / $jumlah_transaksi;

$keterangan = ['Harga Total' => $jumlah_harga, 'Harga Tertinggi' => $harga_tertinggi, 'Harga Terendah'=>$harga_terendah,'Harga Rata- rata'=>$harga_rata2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Array Looping</title>
</head>
<body>
    <h3 align='center'>Data Buah-buahan</h3>
    <table border='1' cellpadding='10' cellspacing='1' width='100%'>
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){
                    ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <!--            array loop-->
            <?php $no=1;
            foreach($ar_buah as $buah){
                $bruto = $buah['harga']*$buah['jumlah'];
                $diskon = ($buah['buah'] == 'jambu' && $buah['jumlah'] >= 4)? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $buah['kode'] ?></td>
                    <td><?= $buah['buah'] ?></td>
                    <td><?= $buah['harga'] ?></td>
                    <td><?= $buah['jumlah'] ?></td>
                    <td>Rp. <?= number_format($bruto,0,',','.') ?></td>
                    <td>Rp. <?= number_format($harga_diskon,0,',','.') ?></td>
                    <td>Rp. <?= number_format($harga_bayar,0,',','.') ?></td>
                </tr>

            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
                ?>
                <tr>
                <td colspan='3'><?= $ket ?></td>
                <td colspan='5'><?= $hasil ?></td>
                </tr>
            <?php } ?>
        </tfoot>

    </table>
</body>
</html>