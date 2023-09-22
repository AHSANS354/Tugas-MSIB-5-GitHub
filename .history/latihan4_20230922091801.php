<form action="" method="POST">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for="">Password</label><br>
    <input type="password" name="pass" id=""><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
$username = $_POST['username'];
$password = $_POST['pass'];

//tampilkan hasilnya
$login = $_POST['login'];
if (isset($login)) {
    echo 'Halo'.$username.'<br> Password :'.$password;
}
?>