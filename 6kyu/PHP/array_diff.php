function arrayDiff($a, $b) {
  for($i = 0; $i < count($a); $i++){
    if(in_array($a[$i], $b)){
      array_splice($a, $i, 1);
      $i--;
    }
  }
  return $a;
}
