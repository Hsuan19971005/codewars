<?php
  // Perimeter of squares in a rectangle
  function perimeter($n) {
    $arr = [0 , 1];
    for($i = 2; $i <= $n + 1; $i++){
      $arr[] = $arr[$i - 1] + $arr[$i - 2];
    }
    return array_sum($arr) * 4;
  }
?>
