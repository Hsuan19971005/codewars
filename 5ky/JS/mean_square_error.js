// Mean Square Error
var solution = function (firstArray, secondArray) {
  return (
    firstArray.reduce((acc, cur, i) => acc + (cur - secondArray[i]) ** 2, 0) /
    firstArray.length
  );
};
