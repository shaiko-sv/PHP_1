<?php
    include 'ChromePhp.php';
    ChromePhp::log($_GET);

    $num1 = $_GET['num1'] ?? (int)($_GET['num1']);
    $num2 = $_GET['num2'] ?? (int)($_GET['num2']);
    $action = $_GET['action'] ?? (strip_tags)($_GET['action']);
    
    ChromePhp::log($num1);
    ChromePhp::log($num2);
    ChromePhp::log($action);

    $result = '';

    switch($action){
        case '+':
            $result = $num1 + $num2;
        break;
        case '-':
            $result = $num1 - $num2;
        break;
        case '*':
            $result = $num1 * $num2;
        break;
        case '%':
            $result = $num1 % $num2;
        break;
        case '/':
            if(!$num2)
                $result = "Division by zero!!!";
            else
            $result = $num1 / $num2;
        break;
        default:
            $result = "Enter one of following operators +, -, * or /";

    }    
    
    //session_start();
    header("Location: ../public/homework1.php?num1=".$num1."&num2=".$num2."&action=".$action."&result=".$result); //редирект на страницу, где хотите отобразить сообщение
    //exit;
?>