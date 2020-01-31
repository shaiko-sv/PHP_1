<?php
    print_r($_POST);

    session_start();
    if(true){
        $_SESSION['sended'] = true;
        header('Location: ../public/index.php'); //редирект на страницу, где хотите отобразить сообщение
        exit;
    }
?>