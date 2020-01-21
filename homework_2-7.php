<?php
    echo "ДЗ 2 - Задание 7<br><br>";
    
    $a = date('G');
    echo "a = $a<br>";
    $b = date('i');
    echo "b = $b<br>";
    
    /*
    0 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 25 26 27 28 29 30 - час(ов), минут()
    1 21 31 41 51 - час(), минут(а)
    2 3 4 22 23 24 32 33 34 42 43 44 52 53 54 - час(а), минут(ы)
    */

    function suffixGroup($value){
        switch($value){
            case "1":
            case"21":
            case"31":
            case"41":
            case"51":
                //echo "0";
                return 0;
            case "2":
            case "3":
            case "4":
            case "22":
            case "23":
            case "24":
            case "32":
            case "33":
            case "34":
            case "42":
            case "43":
            case "44":
            case "52":
            case "53":
            case "54":
                //echo "1";
                return 1;
            default:
                //echo "2";
                return 2;
        }
    }   

    function unitName($value, $unit){
        $base = '';
        $suffix = '';
        if ($unit == 'i'){
            $base = 'минут';
            switch (suffixGroup($value)){
                case 0:
                    $suffix = 'а';
                    break;
                case 1:
                    $suffix = 'ы';
                    break;
                case 2:
                    $suffix = '';
                    break;
            }
        }
        elseif ($unit == 'G'){
            $base = 'час';
            switch (suffixGroup($value)){
                case 0:
                    $suffix = '';
                    break;
                case 1:
                    $suffix = 'а';
                    break;
                case 2:
                    $suffix = 'ов';
                    break;
            }
        }
        //echo $base . $suffix;
        return $value." ".$base.$suffix;
    }

    function timePrint($a, $b){
        return unitName($a, 'G') . " " . unitName($b, 'i');
    }

    echo timePrint($a, $b);
    
    /*
    a - pm/am
    c - 2020-01-17T22:54:34+00:00
    b - date
    e - UTC
    i - min 01
    g - hours 10 12h
    G - hours 22 24h
    l - Friday
    m - month 01
    n - month 1
    o - 2020
    r - Fri, 17 Jan 2020 22:54:34 +0000
    s - sec
    t - 31 ? 
    u - 000000
    v - 000
    y - year 20
    z - 16 ?
    */
?>