<?php 
    // membuat array
    // cara 1
    $buah = ["Apel", "Pisang", "Jeruk"];
    // bisa disebut sebagai multidimensional array
    $buah2 = [
                ["nama" => "Apel",
                 "harga" => 25000
                ], 
                ["nama" => "Pisang",
                 "harga" => 15000
                ],
                ["nama" => "Jeruk",
                 "harga" => 10000
                ],
            ];
            
    echo $buah2[0]["harga"];
    // print_r($buah);
    // cara 2
    $sayur = array("kol", "touge", "wortel");
    // print_r($sayur)

    // akses array
    // echo $buah[2];

    // array assosiatif
    $umur = [
        "anto" => 21,
        "budi" => 26,
        "udin" => 38
    ];
    // print_r($umur);

    // kapan kita butuh array assosiatif

    // built-in function dalam array
    $angka = [4,5,2,1];
    // melakukan urutan naik
    sort($angka);
    // print_r($angka);
    // menggabungakan array
    $list_hobby = ["catur", "berenang"];
    $list_hobby2 = ["basket", "memanah"];
    $hobbies = array_merge($list_hobby,$list_hobby2);
    print_r($hobbies);

    // mengecek element didalam array
    if(in_array("berenang", $hobbies)){
        echo "berenang merupakan hobby anda";
    } else {
        echo "memancing bukan hobby anda";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <ul>
        <?php foreach($buah as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>

        <!-- looping array assosiatif lebih gampang karena terdapat key
        untuk data kompleks 
        -->

        <?php foreach($buah2 as $item): ?>
            <li>nama buah : <?= $item["nama"] ?></li>
            <li>harga buah : <?= $item["harga"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>