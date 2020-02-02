<?php

    include_once '../config/config.php';
    include_once 'ChromePhp.php';

    $products = mysqli_query($con, "SELECT * FROM shop.products ORDER BY counter DESC");
    $result = mysqli_query($con, "SELECT * FROM shop.products ORDER BY counter DESC");

    while($row = mysqli_fetch_assoc($result)){
        ChromePhp::log($row);
    }
?>