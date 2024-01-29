<?php
  // You're a square!
  function isSquare($n){
    if($n < 0) return false;
    $sqr = sqrt($n);
    return ($sqr == floor($sqr));
  }
?>
  