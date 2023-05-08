<?php
require_once 'tugasphp7.php';
class Lingkaran extends Bentuk2D {
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        echo "Lingkaran";
    }
    public function luasBidang(){
        $luas = ($this->jari2 == 7 || $this->jari2 == 14 || $this->jari2 == 21 || $this->jari2 == 28 || $this->jari2 == 35 || $this->jari2 == 42 || $this->jari2 == 49) ? $this->jari2 * $this->jari2 * 22/7  : $this->jari2 * $this->jari2 * 3.14;
        // $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 3.14 * ($this->jari2 * 2) ;
        return $keliling;
    }
}
