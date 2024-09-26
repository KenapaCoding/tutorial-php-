<?php
    class Hewan{
        public function bersuara(){
            return "<br> suara hewan";
        }
    }

    class Kucing extends Hewan{
        public function bersuara(){
            return "<br> miaaaw!";
        }
    }

    $hewan = new Hewan();
    echo $hewan->bersuara();

    $kucing = new Kucing();
    echo $kucing->bersuara();

?>