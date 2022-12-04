<?php

class Produk{

    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul ="judul", $penulis = "penulis",$penerbit = "penerbit",$harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        //komik: Naruto | mashasi kishimoto, shonen jump (Rp. 30000) - 100 Halaman.
        $str = "{this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if ($this-> tipe == "Komik"){
            $str .= " - {$his->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= "- {$this->waktuMain} Jam."
        }
        return $str;
    }
}


class CetakInfoProduk{
    public function cetak (Produk $produk){
        $str = "{$produk->judul} |{$produk->getLabel()} (Rp .{$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil D", "Sony Computer", 250000);
$produk3 = new Produk("Dragonball");



echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1)




?>