<?php

class Produk{

    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct($judul, $penulis,$penerbit,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}



$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil D";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;


echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();




?>