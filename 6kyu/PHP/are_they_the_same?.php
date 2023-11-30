<?php
  //  Are they the "same"?
  // Version 1
  function comp1($a1, $a2) {
    if(is_null($a1) || is_null($a2)) return false;
    foreach($a1 as $val){
      $key = array_search($val**2, $a2);
      if($key !== false)unset($a2[$key]);
    }
    return empty($a2) ? true : false;
  }
  // Version 2
  function comp($a1, $a2) {
    if(is_null($a1) || is_null($a2))return false;
    $square_a1 = array_map(function($var){ return $var**2; }, $a1);
    sort($square_a1);
    sort($a2);
    return $square_a1 === $a2;
  }
?>
