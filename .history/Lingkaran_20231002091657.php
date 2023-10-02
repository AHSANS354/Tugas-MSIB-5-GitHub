<?php
require_once 'abstract2.php';
class Lingkaran extends Bentuk2D{
    public $jari2;
    public function __construct($jari2){
        $this->jari = $jari2;
    }
    public function namaBidang(){
        echo 'Lingkaran';
    }
    public function keliling(){

    }
    public function luasbidang(){
        $luas = 3.14 * $this->jari * $this->jari;
        return $luas;
    }
}
?>