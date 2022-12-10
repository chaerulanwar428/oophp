<?php

require_once 'Apps/init.php';

// $produk1 = new Komik("Naruto","Masashi Kishimoto", "Shonen Jump", 30000,100);

// $produk2 = new Game("Uncharted", "Neil D", "Sony Computer", 250000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use Apps\Service\User as ServiceUser;
use Apps\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
?>