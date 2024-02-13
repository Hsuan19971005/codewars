<?php
// Sum of Digits / Digital Root
// 1st version
function digital_root($number): int {
    $digits = array_map('intval', str_split($number));
    while (count($digits) > 1) {
        $digits = array_map('intval', str_split(array_sum($digits)));
    }
    return $digits[0];
}
// 2nd version 很聰明的寫法
function digital_root2($number): int {
    return 1 + ($number - 1) % 9;
}
