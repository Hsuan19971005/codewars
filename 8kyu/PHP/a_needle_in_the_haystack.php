<?php
  // A Needle in the Haystack
  function findNeedle($haystack) {
    $position =  array_search("needle", $haystack);
    return "found the needle at position {$position}";
  }
?>
