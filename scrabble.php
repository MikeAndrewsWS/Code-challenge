<?php

$bag = [
    $blank = [
        0 => 2,
        "name" => ""
    ],
    $a = [
        1 => 9,
        "name" => "a"
    ],
    $b = [
        3 => 2,
        "name" => "b"
    ],
    $c = [
        3 => 2,
        "name" => "c"
    ],
    $d = [
        2 => 4,
        "name" => "d"
    ],
    $e = [
        1 => 12,
        "name" => "e"
    ],
    $f = [
        4 => 2,
        "name" => "f"
    ],
    $g = [
        2 => 3,
        "name" => "g"
    ],
    $h = [
        2 => 4,
        "name" => "h"
    ],
    $i = [
        1 => 9,
        "name" => "i"
    ],
    $j = [
        8 => 1,
        "name" => "j"
    ],
    $k = [
        5 => 1,
        "name" => "k"
    ],
    $l = [
        1 => 4,
        "name" => "l"
    ],
    $m = [
        3 => 2,
        "name" => "m"
    ],
    $n = [
        1 => 6,
        "name" => "n"
    ],
    $o = [
        1 => 8,
        "name" => "o"
    ],
    $p = [
        3 => 2,
        "name" => "p"
    ],
    $q = [
        10 => 1,
        "name" => "q"
    ],
    $r = [
        1 => 6,
        "name" => "r"
    ],
    $s = [
        1 => 4,
        "name" => "s"
    ],
    $t = [
        1 => 6,
        "name" => "t"
    ],
    $u = [
        1 => 4,
        "name" => "u"
    ],
    $v = [
        4 => 2,
        "name" => "v"
    ],
    $w = [
        4 => 2,
        "name" => "w"
    ],
    $x = [
        8 => 1,
        "name" => "x"
    ],
    $y = [
        4 => 2,
        "name" => "y"
    ],
    $z = [
        10 => 1,
        "name" => "z"
        
    ],
];


$player1 = [];
$player2 = [];
$player3 = [];
$player4 = [];

function draw($player, $bag, $num)
{
    shuffle($bag);
    $i = 0;

    while ($i < $num) {
        $tile = array_shift($bag);
        $tile[array_key_first($tile)] - 1;
        $add = $tile;
        $add[array_key_first($add)] = 1;
        array_push($player, $add);
        array_push($bag, $tile);
        $i++;
    }

    return $player;
    return $bag;
}

function letterScore($tile, $letter)
{
    $points = $letter[array_key_first($letter)] * $tile;
    return $points;
}

print_r(draw($player1, $bag, 4));
