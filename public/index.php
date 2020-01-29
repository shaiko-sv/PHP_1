<script src="../public/packages/jquery-3.4.1.js"></script>
<script>
    function count(id_image, counter){
        "use strict";
        let id = id_image;
        let new_counter = ++counter;
        let query = "id="+id+"&counter="+new_counter;
        alert('query = '+query);

        $.ajax({
            type: "POST",
            url: "../engine/counter.php",
            data: query,
            success: function(answer){
                alert(answer);
            }
        });
    }
</script>

<?php
  include_once '../config/config.php';
  include_once '../engine/photo.php';
  include_once '../engine/ChromePhp.php';
  
  // ChromePhp::log('hello world');
  // ChromePhp::log($_SERVER);
 
  // использование меток
  // foreach ($_SERVER as $key => $value) {
  //     ChromePhp::log($key, $value);
  //}
 
  // предупреждения и ошибки
  // ChromePhp::warn('this is a warning');
  // ChromePhp::error('this is an error');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
  </header>


  <div class="images">
    <?php while($row = mysqli_fetch_assoc($img)):?>
      <div>
        <a href="image.php?photo=<?=$row['file_name'].".".$row['ext']?>&id=<?=$row['id']?>">
              <img onclick='count(<?=$row['id']?>,<?=$row['counter']?>)' src="<?=PHOTO_SMALL.$row['file_name'].".".$row['ext']?>">
        </a>
        <p>Кол-во просмотров:<?=$row['counter']?></p>
      </div>
    <?php endwhile; ?>
  </div>

  <div class="add_foto">
    <form action="#" method="POST" enctype="multipart/form-data">
      <span> <b>Добавить файл: </b> </span>
      <input type="file" name="userfile"> 
      <button type="submit" name="send">ЗАГРУЗИТЬ</button> <br>
      <span><?=$message?></span>
    </form>
  </div>
  <a href="../engine/admin.php">Admin panel</a> 
  
</body>
</html>
