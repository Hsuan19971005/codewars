<?php
  // Square Every Digit
  // 1st version
  function square_digits($num): int {
    $arr = array_map(function($var){ return ((integer)$var)**2; }, str_split($num));
    return implode($arr);
  }

?>
