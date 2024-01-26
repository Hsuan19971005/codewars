// Count by X
function countBy(x, n) {
  let result = [];
  for (let i = 0; i < n; i++) {
    result.push(x * (i + 1));
  }
  return result;
}
