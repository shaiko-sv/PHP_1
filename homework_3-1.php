// С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
<?php
$i = 0;
while($i <= 100) {
    if(!($i % 3)) {
        echo "$i<br>";
    }
    $i++;
}