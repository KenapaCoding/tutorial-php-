<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling di PHP</title>
</head>

<body>
    <form style="display: flex; flex-direction:column; gap: 5px;" action="index.php" method="post">
        <div>
            <label for="name">Nama :</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
        </div>
        <input style="width:200px;" type="submit" value="Kirim">
    </form>
</body>
</html>

<?php

// VALIDASI 
    if(empty($_POST["name"])){
        echo "nama harus diisi <br>";
    } else {
        echo htmlspecialchars($_POST["name"] ) ."<br>";
    }
// VALIDASI EMAIL DENGAN FILTER VALIDATE EMAIL
    if(empty($_POST["email"])){
        echo "email harus diisi";
    } 
    elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "email tidak valid";
    }
    else {
        echo htmlspecialchars($_POST["email"] ) ."<br>";
    }

?>