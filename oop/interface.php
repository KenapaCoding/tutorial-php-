<?php

    interface Kendaraan {
        public function bergerak();
    }


    class Mobil implements Kendaraan {
        public function bergerak(){
            echo "mobil berjalan <br>";
        }
    }

    $avanza = new Mobil();
    $avanza->bergerak();

?>