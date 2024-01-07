<?php
  // Jaden Casing Strings
  // 1st version
  function toJadenCase1(string $string): string
  {
    return implode(" ", array_map('ucfirst', explode(" ",$string)));
  }
  // 2nd version
  function toJadenCase(string $string): string
  {
    return ucwords($string);
  }
?>
