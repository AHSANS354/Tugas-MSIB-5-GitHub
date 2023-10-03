<?php
require_once 'abstract2.php';
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
        $keliling = 2* ($this->panjang + $this->lebar);
        return $keliling;
    }
    public function luasbidang(){
        $luas = ($this->panjang * $this->lebar) ;
        return $luas;
    }
}
?>