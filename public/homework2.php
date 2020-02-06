<?php
    include '../engine/ChromePhp.php';
    ChromePhp::log($_GET);
    session_start();
    $num1 = $_GET['num1'] ?? "";
    $num2 = $_GET['num2'] ?? "";
    $action = $_GET['action'] ?? "+";
    $result = $_GET['result'] ?? "";
?>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $(document).ready(function(){
        $('.button').click(function(){
            var clickBtnValue = $(this).val();
            var ajaxurl = 'calc2.php',
            data =  {'action': clickBtnValue};
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                alert("action performed successfully");
            });
        });
    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../engine/calc2.php" method="GET" style="display:flex">
        <label>
            Num1<br/><input type="text" name="num1" id="1" value="<?=$num1;?>">
        </label>
        <label><br/>
            <button type="submit" name="action" value="+">+</button>
        </label>
        <label><br/>
            <button type="submit" name="action" value="-">-</button>
        </label>
        <label><br/>
            <button type="submit" name="action" value="*">*</button>
        </label>
        <label><br/>
            <button type="submit" name="action" value="/">/</button>
        </label>
        <label><br/>
            <button type="submit" name="action" value="%">%</button>
        </label>
        <label>
            Num2<br/> <input type="text" name="num2" id="3" value="<?=$num2;?>">
        </label>
        <label>
            Result<br/><input type="text" name="result" id="4" value="<?=$result;?>">        
        </label>
    </form>
</body>
</html>