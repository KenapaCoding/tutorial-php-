<?php
    class Kalkulator{
        public static function tambah($a,$b){
            return $a + $b;
        }
    }

    // $calculate = new Kalkulator();
    // echo $calculate->tambah(5,4);

    echo Kalkulator::tambah(5,3)

?>