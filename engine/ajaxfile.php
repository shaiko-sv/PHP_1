<?php
include "../config/config.php";
include_once "ChromePhp.php";

ChromePhp::log('_GET = ',$_GET);

$table = $_GET['table']??'images';
ChromePhp::log('$table = ',$table);
if($table == 'products'){
   $condition = "1";
   if(isset($_GET['id_product'])){
      $condition = " id_product=".$_GET['id_product'];
   }
   ChromePhp::log('condition = ',$condition);
   ChromePhp::log('SQL = '."select * from ".$table." WHERE ".$condition);
   
   $userData = mysqli_query($con,"SELECT * FROM ".$table." WHERE ".$condition);
}

if($table == 'cartItems'){
   $condition = "1";
   if(isset($_GET['id_cart'])){
      $condition = " id_cart=".$_GET['id_cart'];
   }
   ChromePhp::log('condition = ',$condition);
   $sql = "SELECT ".$table.".id_product, products.product_name, products.price, ".$table.".quantity FROM ".$table." 
               INNER JOIN products ON ".$table.".id_product = products.id_product WHERE ".$condition;
   ChromePhp::log($sql);
   $userData = mysqli_query($con,$sql);
}

$response = [];

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
   ChromePhp::log('$row = ',$row);
}
ChromePhp::log('$response = ',$response);

echo json_encode($response);
exit;
