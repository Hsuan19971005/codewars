<?php
  // Split Strings
  function solution($str) {
    if($str == "") return [];
    return array_map(function($var){ return str_pad($var, 2, "_"); }, str_split($str, 2));
  }
?>
