<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar Persegi</title>
</head>
<body>
    <h1>Rumus Bangun Datar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>
                    <input type="text" name="sisi1" require>
                </td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td>
                    <input type="text" name="sisi2" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];
        $luas = $sisi1 * $sisi2;

        echo 'Hasil Perhitungan Luas Persegi';
        echo '<br> SISI pertama : '.$sisi1;
        echo '<br> SISI kedua : '.$sisi2;
        echo '<br> Hasil luas : '.$luas;
    }
    ?>
</body>
</html>