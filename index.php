<?php

require('./propertyConstant.php'); 

use Pbo\Marketplace\produk; 

$produk = new produk('S1113AX', 'Laptop', 10000000, 5); 

//hasil
echo "produk : ". $produk->nama; 
echo "<br/>";
echo "<br/>";

echo "harga: RP.". $produk->harga ;
echo "<br/>";
echo "<br/>";

echo "stok : ". $produk->stok;
echo "<br/>";
echo "<br/>";

echo "pajak : ". $produk->pajak(). "%";
echo "<br/>";
echo "<br/>";

echo "total harga setelah : RP". $produk->total(); 
echo "<br/>";
echo "<br/>";