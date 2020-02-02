<?php
include "../config/config.php";
include_once "ChromePhp.php";

ChromePhp::log('_GET = ',$_GET);

$table = $_GET['table']??'images';
ChromePhp::log('$table = ',$table);

$condition = "1";
if(isset($_GET['id_product'])){
   $condition = " id_product=".$_GET['id_product'];
}
ChromePhp::log('condition = ',$condition);
ChromePhp::log('SQL = '."select * from ".$table." WHERE ".$condition);

$userData = mysqli_query($con,"SELECT * FROM ".$table." WHERE ".$condition);

$response = [];

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
   ChromePhp::log('$row = ',$row);
}
ChromePhp::log('$response = ',$response);

echo json_encode($response);
exit;
