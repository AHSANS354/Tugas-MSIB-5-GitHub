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
kabar('Ahmad');

echo'<hr>';
//fungsi mengecek bilangan prima atau bukan
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if ($bilangan%$i==0) {
            $prima = false;
            break;
        }
    }
    return $prima;
}
if(prima(3)){
    echo'Bilangan Prima';
}else{
    echo'Bukan Bilangan Prima';
}
?>