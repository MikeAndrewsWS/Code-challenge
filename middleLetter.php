<?php
$string = "This sentence will be Much much more difficult";
$result = "";
$chunk = explode(" ", $string);
foreach ($chunk as $part) {
    $ln = strlen($part);
    if ($ln == 1 || $ln == 2) {
        $result = $result . $part . " ";
    } elseif ($ln == 3) {
        $ln = 1;
        $part = substr($part, $ln, $ln);
        $result = $result . $part . " ";
    } elseif ($ln % 2 == 0) {
        $ln  = $ln - 2;
        $ln = $ln / 2;
        $part = substr($part, $ln, 2);
        $result = $result . $part . " ";
    } else {
        $ln = $ln -1;
        $ln  = $ln / 2;
        $part = substr($part, $ln, 1);
        $result = $result . $part . " ";
    }
}
echo($result);
?>