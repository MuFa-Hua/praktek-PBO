<?php

require('./propertyConstant.php'); 

use Pbo\Marketplace\produk; 

$produk = new produk(); 

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