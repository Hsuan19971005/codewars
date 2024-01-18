<?php
// Number of People in the Bus
function number($bus_stops) {
    return array_reduce($bus_stops, function($carry, $item){
      return $carry + $item[0] - $item[1];
    }, 0);
  }
?>
