<?php
function salam(){
    echo'Selamat pagi';
}
function sapa($kawan){
    echo'<br>Selamat pagi kawan'.$kawan;
}
function kabar($kawan = 'Budi'){
    echo'<br>Hai apa kabar'.$kawan;
}

salam();

$nama = 'Deden';
sapa($nama);
sapa('Budi');
kabar();
?>