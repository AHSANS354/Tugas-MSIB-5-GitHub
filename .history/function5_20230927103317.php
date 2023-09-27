<?php

$ar_prodi = ['SI'=>'Sistem Informasi', 'TI'=>'Teknik Informatika','TE'=>'Teknik Elektro'];
$ar_skill = ['HTML'=>10,'CSS'=>10,'Javascript'=>20,'PHP'=>30,'RWD'=>20,'Laravel'=>40,'MySQL'=>40];
$ar_domisili = ['Jakarta', 'Bandung','Surabaya','Malang','Bali','Surakarta','Lainnya'];

?>
<fieldset>
    <legend><h5 class="text-center">Formulir Pendaftaran IT Club</h5></legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="post">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="" id="" value="laki-laki">Laki-Laki &nbsp;
                        <input type="radio" name="" id="" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi : </td>
                    <td>
                        <select name="" id="">
                        <?php foreach ($ar_prodi as $prodi => $v) {
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</fieldset>