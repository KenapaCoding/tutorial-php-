<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
    <?php
        $salam = "hello there";
        $boolean = false;
        $num = 123;
        $float  = 3.14; // float or double
        $arr = ['a', 'b', 3, true];
        $var = null
    ?>
    <h1><?php echo is_null($var) ?></h1>
    <h1><?php echo gettype($var) ?></h1>
    <h1><?php  var_dump($var) ?></h1>
    
</body>
</html>