function perimeter(n) {
  if (n == 0) return 4;
  let arr = [1, 1];
  for (let i = 2; i <= n; i++) {
    arr.push(arr[i - 2] + arr[i - 1]);
  }
  return 4 * arr.reduce((arr, cur) => arr + cur);
}
