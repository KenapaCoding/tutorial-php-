<?php
    // definisi class
    class Mobil {
        // property
        public $warna;

        // method
        public function drive(){
            echo "Mobil di jalankan";
        }
    }

    // membuat object dari class Mobil
    $mobilSaya = new Mobil();
    $mobilSaya->warna = "orange";
    echo $mobilSaya->warna;
    $mobilSaya->drive();
?>