<?php
// Detect Pangram
function detect_pangram($string) {
    $string    = strtolower($string);
    $alphabets = range('a', 'z');
    foreach ($alphabets as $alphabet) {
        if (strpos($string, $alphabet) === false) {
            return false;
        }
    }
    return true;
}
