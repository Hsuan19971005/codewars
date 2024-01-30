// Square Every Digit
function squareDigits(num) {
  arr = Array.from(num.toString(), Number).map((e) => e ** 2);
  return Number(arr.join(""));
}
