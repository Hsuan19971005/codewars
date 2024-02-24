// Persistent Bugger.

function persistence(num) {
  num = Array.from(num.toString(), Number);
  let count = 0;
  while (num.length > 1) {
    num = Array.from(num.reduce((acc, cur) => acc * cur).toString(), Number);
    count++;
  }
  return count;
}
