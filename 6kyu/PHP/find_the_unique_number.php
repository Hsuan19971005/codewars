<?php
// Find the unique number
// O(n)
function find_uniq($a) {
    if($a[0] === $a[1]){
      for($i = 2; $i < count($a); $i++){
        if($a[$i] !== $a[0]) return $a[$i];
      }
    }else{
      return ($a[0] === $a[2]) ? $a[1] : $a[0];
    }
  }
?>
