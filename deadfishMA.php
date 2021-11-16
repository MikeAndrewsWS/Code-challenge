<?php
$string = "iiisdoso";

parseDeadfish($string);

function parseDeadfish ($string) {

    $arr = str_split($string, 1);
    $result = 0;
    $return = [];

    foreach ($arr as $func) {

        switch ($func) {
        case "i": 
            $result++;
            break;
        case "d": 
            $result--;
            break;
        case "s": 
            $result = $result * $result;
            break;
        case "o": 
            array_push($return, $result);
            break;
        }

    }
    print_r($return);
}

?>