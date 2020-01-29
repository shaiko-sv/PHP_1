<?php
include_once "../config/config.php";
include_once "ChromePhp.php";

$id = $_POST['id'];
$counter = $_POST['counter'];

$sql = "UPDATE images SET counter = $counter WHERE id = $id";

if(mysqli_query($connect,$sql)){
    echo 'Success!';
}