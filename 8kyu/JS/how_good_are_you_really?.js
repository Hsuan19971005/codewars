// How good are you really?
function betterThanAverage(classPoints, yourPoints) {
  return (
    classPoints.reduce((acc, cur) => acc + cur, 0) / classPoints.length <
    yourPoints
  );
}
