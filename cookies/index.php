<?php
    setcookie("user_id", "e90iuh7890j12", time() + (86400 * 30), "/");
    setcookie("user_name", "testetUser", time() + (86400 * 30), "/");


    if(isset($_COOKIE['user_id'])) {
        echo $_COOKIE['user_id'];
    } else {
        echo "Cookie tidak ditemukan";
    }
    setcookie("user_name", "", time() - (86400 * 30), "/");

?>