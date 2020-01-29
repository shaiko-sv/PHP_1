<?php

include '../engine/ChromePhp.php';

  CONST PHOTO = './img/full/';
  CONST PHOTO_SMALL = './img/small/';

  const SERVER = "localhost";
  const USER = "root";
  const PASS = "root";
  const DB = "shop";

  $connect = mysqli_connect(SERVER, USER, PASS, DB);
  
  if(mysqli_connect_errno()){
    die(ChromePhp::log("Connect failed:".mysqli_connect_error()));
  } else {
    ChromePhp::log("Подключен к базе данный '".DB."'");
  }
?>
