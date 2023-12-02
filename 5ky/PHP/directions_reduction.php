<?php
  // Directions Reduction
  // Version 1
  function dirReduc1($arr) {
    if(count($arr) === 10)var_dump($arr);
    for($i = 0; $i < count($arr) - 1; $i++){
      $in_north_south = in_array($arr[$i], ["NORTH", "SOUTH"]) && in_array($arr[$i + 1], ["NORTH", "SOUTH"]) && $arr[$i] != $arr[$i + 1];
      $in_east_west = in_array($arr[$i], ["EAST", "WEST"]) && in_array($arr[$i + 1], ["EAST", "WEST"]) && $arr[$i] != $arr[$i + 1];
      if($in_north_south || $in_east_west){
        array_splice($arr, $i, 2);
        $i !== 0 ? $i -=2 : $i--;
      }
    }
    return $arr;
  }
  // Version 2
  function dirReduc2($arr) {
    $dir = ['NORTH' => 'SOUTH', 'SOUTH' => 'NORTH', 'EAST' => 'WEST', 'WEST' => 'EAST'];
    $stack = [];
    foreach($arr as $k => $v){
      if(end($stack) === $dir[$v]){
        array_pop($stack);
      }else{
        $stack[] = $v;
      }
    }
    return $stack;
  }
?>
