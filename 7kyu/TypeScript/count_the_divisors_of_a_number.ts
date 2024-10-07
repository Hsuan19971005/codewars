// Count the divisors of a number
export function divisorsV1(n: number) {
  const divisors: number[] = [];
  for (let i = 1; i <= n; i++) {
    if (Math.floor(n / i) === n / i) {
      divisors.push(i);
    }
  }
  return divisors.length;
}

export function divisorsV2(n: number) {
  let count = 0;
  for (let i = 1; i <= n; i++) {
    if (n % i === 0) count++;
  }

  return count;
}
