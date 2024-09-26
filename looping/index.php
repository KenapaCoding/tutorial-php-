<!-- <?php
    // Looping
    // 1. while loop

    $i = 1;
    echo "while loop <br>";
    while ($i <= 5){
        echo "Nomor : $i <br>";
        $i++;
    }

    // 2. do while loop
    echo "<br> do while loop <br>";
    $j = 1;
    do {
        echo "Nomor : $j <br>";
        $j++;
    } while ($j <= 5);

    // 3. for loop
    echo "<br> for loop <br>";
    for($k = 1; $k<=5;$k++){
        echo "Nomor : $k <br>";
    }

    // break dan continue
    echo "<br> break dan continue <br>";
    for($k = 1; $k<=5;$k++){
        if($k == 3){
            continue;
        }
        else if($k == 5){
            break;
        }
        echo "Nomor : $k <br>";
    }

    // foreach
    $arr = ['pisang', 'apel', 'mangga'];
    foreach($arr as $buah){
        echo "buah : $buah <br>";
    }

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternative sintax</title>
</head>
<body>
    <ul>
        <!-- <?php
            $arr = ['pisang', 'apel', 'mangga'];
            foreach($arr as $buah){
                echo "<li> buah : $buah <br></li>";
            }
        ?> -->

        <!-- alternative syntax -->
         <?php foreach($arr as $buah): ?>
            <li style="color: red;">buah : <?= $buah?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>