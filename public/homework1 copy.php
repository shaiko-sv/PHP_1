<?php
    include '../engine/ChromePhp.php';
    ChromePhp::log($_GET);
    session_start();
    $num1 = $_GET['num1'] ?? "";
    $num2 = $_GET['num2'] ?? "";
    $action = $_GET['action'] ?? "+";
    $result = $_GET['result'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../engine/calc.php" method="GET" style="display:flex">
        <label>
            Num1<br/><input type="text" name="num1" id="1" value="<?=$num1;?>">
        </label>
        <label>
            Action<br/> <select name="action"> <!--выпадающий список-->
                        <!--<select name="action" size=3> <!--список с прокруткой-->
                        <option value="+"<?php echo ($action == '+') ? 'selected' : '';?>>+</option>
                        <option value="-"<?php echo ($action == '-') ? 'selected' : '';?>>-</option>
                        <option value="*"<?php echo ($action == '*') ? 'selected' : '';?>>*</option>
                        <option value="/"<?php echo ($action == '/') ? 'selected' : '';?>>/</option>
                        <option value="%"<?php echo ($action == '%') ? 'selected' : '';?>>%</option>
                    </select>
        </label>
        <label>
            Num2<br/> <input type="text" name="num2" id="3" value="<?=$num2;?>">
        </label>
        <label>
            Result<br/><input type="text" name="result" id="4" value="<?=$result;?>">        
        </label>
        <label><br/>
            <input type="submit" value="Send">
        </label>
    </form>
</body>
</html>