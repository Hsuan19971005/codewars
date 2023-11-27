<?php
  // Create Phone Number
  // 1st version
  function createPhoneNumber1($numbersArray) {
    array_unshift($numbersArray, "(");
    array_splice($numbersArray, 4, 0, ") ");
    array_splice($numbersArray, 8, 0, "-");
    return implode($numbersArray);
  }
  // 2nd version
  function createPhoneNumber2($numbersArray) {
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$numbersArray);
  }
?>
