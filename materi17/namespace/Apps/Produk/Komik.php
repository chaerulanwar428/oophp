<?php
class Komik extends Produk implements infoProduk{
    public $jmlHalaman;

    public function __construct($judul ="judul", $penulis = "penulis", $penerbit ="penerbit" , $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        //komik: Naruto | mashasi kishimoto, shonen jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}