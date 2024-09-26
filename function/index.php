<?php
    // cara membuat function
    function salam(){
        echo "Halo, Selamat Datang! <br>";
    }

    salam(); //cara memanggil function

    function penjumlahan($a, $b){
        $hasil = $a + $b;
        echo $hasil . "<br>";
    }

    penjumlahan(5, 3);

    function luasPersegi($sisi){
        return $sisi * $sisi;
    }

    $luas = luasPersegi(5);
    echo $luas;

?>