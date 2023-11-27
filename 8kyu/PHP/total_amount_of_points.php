// Total amount of points
function points(array $games): int {
  $result = 0;
  foreach($games as $game){
    $scores = explode(":",$game);
    if($scores[0] > $scores[1]){
      $result += 3;
    }elseif($scores[0] == $scores[1]){
      $result += 1;
    }
  }
  return $result;
}
