// Stop gninnipS My sdroW!
<?php
function spinWords(string $str): string {
    $result = array_map(function ($e) {
        return (strlen($e) >= 5) ? strrev($e) : $e;
    }, explode(' ', $str));
    return implode(' ', $result);
}
