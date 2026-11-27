<?php

require('./jasa.php'); 

use Pbo\Marketplace\jasa; 

$produk = new jasa(); 

$produk->setKode("P001")
       ->setNama("Laptop")
       ->setHarga(10000000)
       ->setStok(5);

//hasil
echo "produk : ". $produk->getNama(); 
echo "<br/>";
echo "<br/>";

echo "harga: RP.". $produk->getHarga(); ;
echo "<br/>";
echo "<br/>";

echo "stok : ". $produk->getStok();
echo "<br/>";
echo "<br/>";

echo "pajak : ". $produk->pajak(). "%";
echo "<br/>";
echo "<br/>";

echo "total harga setelah : RP". $produk->total(); 
echo "<br/>";
echo "<br/>";

echo "metode pembayaran : ". $produk->payment('qris');