<?php
// Isograms
// 1st version
function isIsogram1($string) {
  $arr = str_split(strtolower($string));

   foreach($arr as $char){
    array_shift($arr);
    if(in_array($char, $arr)) {
      return false;
    }
  }
  return true;
}
// 2nd version
function isIsogram($string) {
    $str = str_split(strtolower($string));

    return count($str) === count(array_unique($str));
}
?>
