<?php

namespace Pbo\Marketplace;

require_once('./propertyConstant.php');

use Pbo\Marketplace\produk;

class jasa {

    use produk; 

       public function payment($tipe) {

            return match($tipe) {
               "virtual" => "virtual account",
               "qris" => "QRIS",
               default => "Metode pembayaran hanya virtual account dan QRIS"
            };


    }
}
?>