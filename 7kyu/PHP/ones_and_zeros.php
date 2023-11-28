<?php
  // Ones and Zeros
  // 1st version
  function binaryArrayToNumber1($arr) {
    $result = 0;
    for($i = 0; $i < count($arr); $i++){
      if($arr[$i] === 0) continue;
      $result += 1 << (count($arr) - $i - 1);
    }
    return $result;
  }
  // 2nd version
  function binaryArrayToNumber2($arr) {
    return bindec(implode('', $arr));
  }
?>
