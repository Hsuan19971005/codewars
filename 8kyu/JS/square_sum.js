// Square(n) Sum
function squareSum(numbers) {
  return numbers.reduce(function (acc, current) {
    return acc + current ** 2;
  }, 0);
}
