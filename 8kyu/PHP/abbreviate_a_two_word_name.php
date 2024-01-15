<?php
// Abbreviate a Two Word Name
function abbrevName($name)
{
  $name = explode(' ', $name);
  $result = array_map(function($word){
    return $word[0];
  }, $name);
  return implode('.', $result);
}
?>
