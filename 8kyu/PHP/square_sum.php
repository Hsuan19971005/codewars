<?php
// Square(n) Sum
function square_sum($numbers) : int {
    return array_reduce($numbers, function($carry, $item){
      return $carry + $item ** 2;
    }, 0);
  }
?>
