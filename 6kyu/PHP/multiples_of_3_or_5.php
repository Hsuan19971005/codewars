<?php
// Multiples of 3 or 5
// 1st version
function solution($number) {
    if ($number < 0) {
        return 0;
    }

    $sum = 0;
    for ($i = 0; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// 2nd version
function solution2($number) {
    if ($number < 0) {
        return 0;
    }

    return array_sum(array_filter(range(1, $number - 1), function ($var) {
        return $var % 3 == 0 || $var % 5 == 0;
    }));
}
