<?php
  // Unique In Order
  // 1st version
  function uniqueInOrder1($iterable){
    if(empty($iterable)) return [];
    $ret = is_string($iterable) ? str_split($iterable) : $iterable;

    for($i = 0; $i < count($ret); $i++){
      if($i === count($ret) - 1) break;

      if($ret[$i] === $ret[$i + 1]){
        array_splice($ret, $i + 1, 1);
        $i--;
      }
    }
    return $ret;
  }

  // 2nd version
  function uniqueInOrder2($iterable){
    $arr = is_string($iterable) ? str_split($iterable) : $iterable;
    $ret = array_reduce($arr, function($carry, $item){
      if($item != end($carry)){
        $carry[] = $item;
      }
      return $carry;
    }, []);

    return $ret;
  }
?>
