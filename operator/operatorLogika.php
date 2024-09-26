<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>
    <?php
        $a = true;
        $b = false;
    ?>
    <ul>
        <li>$a && $b = <?php var_dump($a&&$b) ?></li>
        <li>$a || $b = <?php var_dump($a||$b) ?></li>
        <li>!$a = <?php var_dump(!$a) ?></li>
        <li>$a xor $b = <?php var_dump($a xor $b) ?></li>
    </ul>
</body>
</html>