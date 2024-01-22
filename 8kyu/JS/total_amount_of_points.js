// Total amount of points
function points(games) {
  let result = 0;
  games.forEach(function (element) {
    let score = element.split(":");
    if (score[0] > score[1]) {
      result += 3;
    } else if (score[0] == score[1]) {
      result += 1;
    }
  });
  return result;
}
