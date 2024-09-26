<?php
    class Hewan {
        protected $nama;

        public function setNama($nama) {
            $this->nama = $nama;
        }
        public function getNama(){
            return $this->nama;
        }
    }

    class Anjing extends Hewan{
        public function bersuara(){
            echo $this->nama;
            echo "Guk Guk !";
        }
    }

    $anjingElu = new Anjing();
    $anjingElu->setNama("Bulldog");
    echo $anjingElu->getNama();
    echo $anjingElu->bersuara();

?>