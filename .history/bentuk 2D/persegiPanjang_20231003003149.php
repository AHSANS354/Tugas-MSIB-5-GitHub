<?php
require_once 'abstract.php';
class PersegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar   = $lebar;
    }
    public function namaBidang(){
        echo 'Persegi Panjang';
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