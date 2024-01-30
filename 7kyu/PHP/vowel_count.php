<?php
  // Vowel Count
  // 1st version
  function getCount1($str) {
    $vowelsCount = 0;

    foreach(str_split(strtolower($str)) as $var){
      if(in_array($var, ['a','e','i','o','u'])) $vowelsCount++;
    }

    return $vowelsCount;
  }

  // 2nd version
  function getCount($str) {
    $vowelsCount = 0;

    $vowels = ['a','e','i','o','u'];
    foreach($vowels as $vowel){
      $vowelsCount += substr_count($str, $vowel);
    }

    return $vowelsCount;
  }

?>
