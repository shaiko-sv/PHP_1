
<?php	

  include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
</head>
<body>
  <a href="index.php"> Вернуться в галерею </a>
  <div>
    <img src="<?=PHOTO.$_GET['photo'] ?>">
  </div>
</body>
</html>
