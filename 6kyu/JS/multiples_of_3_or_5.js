// Multiples of 3 or 5

function solution(number) {
  if (number < 0) return 0;
  return [...Array(number).keys()].reduce((acc, cur) => {
    if (cur % 3 == 0 || cur % 5 == 0) {
      return acc + cur;
    } else {
      return acc;
    }
  }, 0);
}

function solution2(number) {
  let sum = 0;
  for (let $i = 0; $i < number; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) sum += $i;
  }
  return sum;
}
