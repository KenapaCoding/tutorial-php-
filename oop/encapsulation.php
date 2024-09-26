<?php
    class Produk {
        public $nama;
        protected $harga;
        private $stok;

        //method
        public function setStok($stok){
            $this->stok = $stok;
        }

        public function getStok(){
            return $this->stok;
        }

    }

    $produkSaya = new Produk();
    $produkSaya->nama = "Laptop";
    echo $produkSaya->nama;

    $produkSaya->setStok(20000000);
    echo $produkSaya->getStok();


?>