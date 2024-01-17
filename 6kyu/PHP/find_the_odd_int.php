<?php
// Find the odd int
// 1st version
function findIt1(array $seq) : int
{
    $count =[];
    foreach($seq as $number){
      if(in_array($number, array_keys($count))){
        $count[$number] += 1;
      }else{
        $count[$number] = 1;
      }
    }

    foreach($count as $key => $val){
      if($val % 2 == 1) return $key;
    }
}
// 2nd version
function findIt(array $seq) : int
{
    return array_reduce($seq, function($carry, $item){
      return $carry ^ $item;
    });
}
?>
