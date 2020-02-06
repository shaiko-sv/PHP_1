<?php

include '../engine/ChromePhp.php';

    CONST PHOTO = './img/full/';
    CONST PHOTO_SMALL = './img/small/';

    const SERVER = "localhost";
    const USER = "root";
    const PASS = "root";
    const DB = "shop";


    $con = mysqli_connect(SERVER, USER, PASS, DB);
    // Check connection
    if (!$con) {
    die(ChromePhp::log("Connect failed:".mysqli_connect_error()));
    } else {
        ChromePhp::log("Подключен к базе данный '".DB."'");
    }
?>