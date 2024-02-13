// Sum of Digits / Digital Root
function digitalRoot(n) {
  let number = n.toString();
  while (number.toString().length > 1) {
    number = number
      .toString()
      .split("")
      .reduce((acc, cur) => acc + Number(cur), 0);
  }
  return Number(number);
}
