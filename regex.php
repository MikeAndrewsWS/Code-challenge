<?php

$string = "We're moving office at 09:15 to room 123:456 so we can hide away.";
$exp = "/([0-1]?[0-9]|2[0-3]):[0-5][0-9]/";

if (preg_match($exp, $string)) {
    echo("Thats Valid");
} else {
    echo("I'm sorry, when?");
}