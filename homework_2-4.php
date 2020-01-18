<?php
    echo "ДЗ 2 - Задание 4<br><br>";

    function summ($a, $b){
        return $a + $b;
    }
    function extr($a, $b){
        return $a - $b;
    }
    function mult($a, $b){
        return $a * $b;
    }
    function div($a, $b){
        if(!$b){
            return "делить на $b нельзя";
        }
        return $a / $b;
    }

    function mathOperation($arg1, $arg2, $operation){
        switch ($operation){
            case "+":
                return summ($arg1, $arg2);
            case "-":
                return extr($arg1, $arg2);
            case "*":
                return mult($arg1, $arg2);
            case "/":
                return div($arg1, $arg2);
            default:
                return "введите правильную операцию '+', '-', '*' или '/'";
        }
    }
    $arg1 = 2;
    $arg2 = 3;
    echo "mathOperation($arg1, $arg2, '+') = ".mathOperation($arg1, $arg2, '+')."<br>";
    echo "mathOperation($arg1, $arg2, '-') = ".mathOperation($arg1, $arg2, '-')."<br>";
    echo "mathOperation($arg1, $arg2, '*') = ".mathOperation($arg1, $arg2, '*')."<br>";
    echo "mathOperation($arg1, $arg2, '/') = ".mathOperation($arg1, $arg2, '/')."<br>";
    echo "mathOperation($arg1, 0, '/') = ".mathOperation($arg1, 0, '/')."<br>";
?>