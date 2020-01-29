<?php

include("../config/config.php");



$result = mysqli_query($link, "SELECT * FROM shop.images");

mysqli_close($link);

$form = "";
while($row = mysqli_fetch_assoc($result)){
   $form .= "<img src='".$row['src']."'>";
}
echo($form);

?>