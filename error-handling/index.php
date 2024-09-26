<?php
    // notice error
    // $num = 5;
    // echo $number;
    // echo "ini code setelah notice error";

    // // warning error
    // include("file_tidak_ada.php");
    // echo "ini code setelah warning error";

    // // fatal error
    // // fungsiTidakAda();
    // echo "ini code setelah fatal error";

    function divide($numerator, $denumerator){
        if($denumerator == 0){
            throw new Exception("Pembagian dengan nol tidak diperbolehkan");
        }
        return $numerator/ $denumerator;
    }

    try {
        echo divide(10,2);
    } catch (Exception $e) {
        echo "Pengecualian ditangkap : ", $e->getMessage();
    } finally {
        echo " <br> Blok finally ini selalu running";
    }

    // echo divide(10,0);
    // echo "eksekusi kode lainnya"

?>