<?php
  // Mean Square Error
  function solution(array $a, array $b): float {
    $squares = [];
    for($i = 0; $i < count($a); $i++){
      $squares[] = abs($a[$i] - $b[$i]) ** 2;
    }
    return array_sum($squares) / count($squares);
  }
?>
