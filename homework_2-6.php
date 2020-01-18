<?php
    echo "ДЗ 2 - Задание 6<br><br>";
    
    function power($val, $pow){
        //var_dump(!$pow);
        if(!$pow){ //если $pow = 0(false) то !$pow = true;
            return 1;
        }
        if ($pow == 1){
            return $val;
        }
        return $val * power($val, --$pow);
    }

    echo "power(2,0) = ".power(2, 0)."<br>";
    echo "power(2,1) = ".power(2, 1)."<br>";
    echo "power(2,2) = ".power(2, 2)."<br>";
    echo "power(2,3) = ".power(2, 3)."<br>";
    echo "power(2,4) = ".power(2, 4)."<br>";
    echo "power(2,5) = ".power(2, 5)."<br>";
    echo "power(2,6) = ".power(2, 6)."<br>";
    echo "power(2,7) = ".power(2, 7)."<br>";
    echo "power(2,8) = ".power(2, 8)."<br>";
?>