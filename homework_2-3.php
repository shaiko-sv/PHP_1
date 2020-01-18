<?php
    echo "ДЗ 2 - Задание 3<br><br>";

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

    echo "summ(2,3) = ".summ(2,3)."<br>";
    echo "extr(2,3) = ".extr(2,3)."<br>";
    echo "mult(2,3) = ".mult(2,3)."<br>";
    echo "div(2,3) = ".div(2,3)."<br>";
    echo "div(2,0) = ".div(2,0)."<br>";
?>