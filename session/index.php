<?php
    session_start();
    $_SESSION['user_name'] = "John Doe";
    $_SESSION['age'] = 35;

    if(isset($_SESSION['user_name'])) {
        echo $_SESSION['user_name'];
    } else {
        echo "Session tidak ditemukan";
    }
    if(isset($_SESSION['age'])) {
        echo $_SESSION['age'];
    } else {
        echo "Session tidak ditemukan";
    }

    // unset($_SESSION['user_name']);
    session_destroy();
    $_SESSION =[];

    echo "<br> ".$_SESSION['user_name'];
    echo $_SESSION['age'];

?>