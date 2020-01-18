<?php
    echo "ДЗ 2 - Задание 1<br><br>";
    $a = rand(-20, 20);
    echo "a = $a<br>";
    $b = rand(-20, 20);
    echo "b = $b<br>";
    if($a >= 0 && $b >= 0) {
        echo "a - b = " . ($a - $b) . "<br>";
    }
    elseif ($a < 0 && $b < 0) {
        echo "a * b = " . ($a * $b) . "<br>";
    }
    else {
        echo "a + b = " . ($a + $b) . "<br>";
    }
?>