<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server var global</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="name"> Nama </label>
        <input type="text" name="name" id="name">
    </form>
</body>
</html>

<?php
    // echo $_SERVER["PHP_SELF"]
    foreach ($_SERVER as $key => $item){
        echo "<br> $key : $item";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $_POST["name"];
    } else {
        echo "bukan method post";
    }



?>