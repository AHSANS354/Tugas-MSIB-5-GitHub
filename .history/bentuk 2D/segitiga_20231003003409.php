<?php
require_once 'abstract.php';
class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }
    public function keliling(){
        $keliling = 2*($panjang + $lebar);
        return $keliling;
    }
    public function luasBidang(){
        $luas = ($panjang * $lebar) ;
        return $luas;
    }
}
?>