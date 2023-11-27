<?php
  // Detect Pangram
  function detect_pangram($string) {
    $string = strtolower($string);
    echo $string;
    $alphabets = range('a','z');
    foreach($alphabets as $alphabet){
      if(strpos($string, $alphabet) === false){
        echo strpos($string, $alphabet);
        echo $alphabet;
        return false;
      }
    }
    return true;
  }
?>
