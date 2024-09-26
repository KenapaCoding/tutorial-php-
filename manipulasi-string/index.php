<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi string</title>
</head>
<body>
    <?php
        // string concatenation
        $namaDepan = "Ranggo";
        $namaBelakang = "Pato";
        //cara pertama
        $namaPanjang = $namaDepan . " ". $namaBelakang;
        // cara kedua menggunakan interpolasi string
        $fullName = "$namaDepan $namaBelakang";

        // pencarian string
        $kalimat = "ini PHP adalah bahasa pemograman PHP";
        $posisi = strpos($kalimat, "PHP"); // posisi awal
        $posisiAkhir = strrpos($kalimat, "PHP");

        // fungsi lain string
        // replace
        $newKalimat = str_replace("PHP", "JavaScript", $kalimat);
        // panjang string
        $panjangKalimat = strlen($kalimat);
        // upperCase
        $upperKalimat = strtoupper($kalimat);
        $lowerKalimat = strtolower($kalimat);
        // substr
        $subKalimat = substr($kalimat, 0, 12)

    ?>
    <h1><?= $namaPanjang ?></h1>
    <h1><?= $fullName ?></h1>
    <h1><?= $posisi ?></h1>
    <h1><?= $posisiAkhir ?></h1>
    <h1><?= $newKalimat ?></h1>
    <h1><?= $panjangKalimat ?></h1>
    <h1><?= $kalimat ?></h1>
    <h1><?= $upperKalimat ?></h1>
    <h1><?= $lowerKalimat ?></h1>
    <h1><?= $subKalimat ?></h1>
</body>
</html>