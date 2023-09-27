<?php

$ar_prodi = ['SI'=>'Sistem Informasi', 'TI'=>'Teknik Informatika','TE'=>'Teknik Elektro'];
$ar_skill = ['HTML'=>10,'CSS'=>10,'Javascript'=>20,'PHP'=>30,'RWD'=>20,'Laravel'=>40,'MySQL'=>40];
$ar_domisili = ['Jakarta', 'Bandung','Surabaya','Malang','Bali','Surakarta','Lainnya'];

?>
<fieldset style="background-color: cyan;">
    <legend><h2 class="text-center">Formulir Pendaftaran IT Club</h2></legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" name="nama" size="30">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" id="" value="laki-laki">Laki-Laki &nbsp;
                        <input type="radio" name="jk" id="" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi : </td>
                    <td>
                        <select name="" id="">
                        <?php foreach ($ar_prodi as $prodi => $v) {
                            ?>
                            <option name="studi" value="<?= $prodi ?>"><?= $v ?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming : </td>
                    <td>
                        
                            <?php foreach($ar_skill as $skill => $x){
                                ?>
                                <input type="checkbox" name="skill" id="" value="<?= $skill ?>"><?= $skill ?>
                            <?php } ?>
                       
                    </td>
                </tr>
                <tr>
                    <td>Domisili : </td>
                    <td>
                        <select name="domisili" id="">
                            <?php foreach($ar_domisili as $domisili){
                                ?>
                                <option value="<?= $domisili ?>"><?= $domisili ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tfoot>
                    <tr>
                        <td align='center'>
                            <button name='proses'>Submit</button>
                        </td>
                    </tr>
                </tfoot>
            </form>
        </tbody>
    </table>
</fieldset>

<?php
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
}
?>