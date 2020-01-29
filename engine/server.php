<?php
include_once "../config/config.php";
include_once "ChromePhp.php";

$id = $_POST['id'];
$file_name = $_POST['file_name'];

$sql = "UPDATE images SET file_name = $file_name WHERE id=$id";

if(mysqli_query($connect,$sql)){
    echo 'Success!';
}