<?php
session_start();
if(isset($_SESSION['sended']) && $_SESSION['sended']) : ?>
    <div class="alert-success">Thanks! .........</div>
    <?php $_SESSION['sended'] = null;?>
 <?php endif;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../engine/calc.php" method="POST">
        <input type="text" name="text1" id="1">
        <input type="text" name="text2" id="2">
        <input type="submit" value="Send">
    </form>
</body>
</html>