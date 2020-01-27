<?php
    $mas = scandir("../img/small");
    $masBig = scandir("../img/big");
    $imagesNumber = count($mas)-2;
    include("gallery.js");
?>