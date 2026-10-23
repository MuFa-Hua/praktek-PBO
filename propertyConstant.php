<?php

class produk {

      //property
      public string $kode; 
      public string $nama;
      public int $harga;
      public int $stok;


     //constant(tetap)
     public const PAJAK = 0.11;  

     public function __construct($kode, $nama, $harga, $stok) {
         $this->kode = $kode;
         $this->nama = $nama;
         $this->harga = $harga; 
         $this->stok = $stok;
     }

     public function pajak() {
          return self::PAJAK * 100; 
     }

     public function total() {
          return $this->harga + ($this->harga * self::PAJAK);
     }
}

//object
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