<?php
    class Orang{
        public $nama;

        // constructor
        public function __construct($nama)
        {
            $this->nama = $nama;
            echo "ini dari constructor";
        }
        // destructor
        public function __destruct()
        {
            echo "<br> ini di running ketika script selesai / object dihapus";
        }

    }

    $orang1 = new Orang("Andi");
    echo $orang1->nama ;


    echo "<br> test hello world"

?>