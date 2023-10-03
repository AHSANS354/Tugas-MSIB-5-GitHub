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
        $keliling = sqrt($this->alas*$this->alas + $this->tinggi*$this->tinggi);
        return $this->alas + $this->tinggi + $keliling;
    }
    public function luasbidang(){
        $luas = 0.5 * $this->alas *$this->tinggi ;
        return $luas;
    }
}
?>