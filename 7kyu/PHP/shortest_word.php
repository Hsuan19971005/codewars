<?php
  // Shortest Word
  // 1st version
  function findShort1($str){
    return min(array_map(function($s){ return strlen($s);}, explode(" ", $str)));
  }
  // 2nd version
  function findShort2($str){
    return min(array_map('strlen', explode(' ', $str)));
  }
?>
