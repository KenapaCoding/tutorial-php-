<?php
    abstract class Hewan{
        abstract public function bersuara();
    }

    class Kucing extends Hewan{
        public function bersuara(){
            echo "miaw";
        }
    }

    $kucing = new Kucing();
    echo $kucing->bersuara();


    


?>