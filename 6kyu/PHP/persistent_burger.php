<?php
// Persistent Bugger.
// 1st version
function persistence1(int $num): int {
  $num = str_split($num);
  $count = 0;
  while(count($num) > 1){
    $count++;
    $product = 1;
    foreach($num as $item){
      $product *= intval($item);
    }
    $num = str_split($product);
  }

  return $count;
}
// 2nd version
function persistence(int $num): int {
  $count = 0;
  while($num > 9){
    $num = array_product(str_split($num));
    $count++;
  }
  return $count;
}
?>
