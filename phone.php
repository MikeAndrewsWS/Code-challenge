<?php
$number = "95465864";
$arr = str_split($number, 1);
$key_map = [
    "2" => ["a", "b", "c"],
    "3" => ["d", "e", "f"],
    "4" => ["g", "h", "i"],
    "5" => ["j", "k", "l"],
    "6" => ["m", "n", "o"],
    "7" => ["p", "q", "r", "s"],
    "8" => ["t", "u", "v"],
    "9" => ["w", "x", "y", "z"]
];

$result = [""];
foreach ($arr as $digit) {
    if (isset($key_map[$digit])) {
        $result = call_user_func_array(
            "array_merge",
            array_map(
                function ($tok) use ($key_map, $digit) {
                    return array_map(
                        function ($char) use ($tok) {
                            return $tok . $char;
                        },
                        $key_map[$digit]
                    );
                },
                $result
            )
        );
    }
}

echo (implode(' ', $result));