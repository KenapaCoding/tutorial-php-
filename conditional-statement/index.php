
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
<?php
    // if else, else if

    $nilai = 95;
    /* jika nilai >= 90, Grade A
        nilai >= 75, Grade B
        selain itu, Grade C
    */
    // if ($nilai >= 90){
    //     echo "<h1>Grade A</h1>";
    // } else if ($nilai >= 75) {
    //     echo "<h1>Grade B</h1>";
    // } else {
    //     echo "<h1>Grade C</h1>";
    // }

    //switch case statement
    $warna = "orange";
    switch($warna){
        case "merah":
            echo "Warna favorit anda adalah merah";
            break;
        case "biru":
            echo "Warna favorit anda adalah biru";
            break;
        case "hijau":
            echo "Warna favorit anda adalah hijau";
            break;
        default:
            echo "Warna Favorit anda tidak diketahui";
    }

?>

<div>
    <!-- <?php if($nilai >= 90): ?>
        <h1 style="color: red;">Grade A</h1>
    <?php elseif($nilai >=75): ?>
        <h1>Grade B</h1>
    <?php else: ?>
        <h1>Grade C</h1>
    <?php endif; ?>  -->


</div>
</body>
</html>