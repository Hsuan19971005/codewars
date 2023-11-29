<?php
  // Find The Parity Outlier
  // 1st version
  function find1($integers) {
    if(abs($integers[0] % 2) === abs($integers[1] % 2)){
      $result = array_filter($integers, function($var) use ($integers){
        return abs($var % 2) !== abs($integers[0] % 2);
      });
      return array_values($result)[0];
    }elseif(abs($integers[0] % 2) === abs($integers[2] % 2)){
      return $integers[1];
    }else{
      return $integers[0];
    }
  }
  // 2nd version
  function find2($integers) {
    foreach($integers as $int){
      ($int % 2 == 0) ? $even[] = $int : $odd[] = $int;
    }
    return count($odd) > count($even) ? $even[0] : $odd[0];
  }
?>
