<?php

    $db = mysqli_connect("localhost", "root", "", "equip2upgrade");
    if (mysqli_connect_errno()) {
        echo "Connection error" . mysqli_connect_error();
    }else {
        //echo "Connected";
    }
    session_start();

    define("EMAIL", "emma1994204@gmail.com");
    define("EMAIL_PASSWORD", "Emmagist1994204");

?>