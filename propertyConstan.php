<?php

class produk {

      //property
      public string $kode; 
      public string $nama;
      public int $harga;
      public int $stok;


     //constant(tetap)
     public const PAJAK = 0.11;  
}

//object
$produk = new produk();
$produk->kode = "S1113AX";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

//pajak 
$pajak = produk::PAJAK * 100; 
$jumlahPajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak; 

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

echo "pajak : ". $pajak. "%";
echo "<br/>";
echo "<br/>";

echo "total harga setelah : RP". $total; 
echo "<br/>";
echo "<br/>";