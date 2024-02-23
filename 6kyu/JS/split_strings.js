// Split Strings
// 1st version
function solution(str) {
  let arr = [];
  for (let i = 0; i < str.length; i += 2) {
    arr.push(str.slice(i, i + 2));
  }
  return arr.map((e) => e.padEnd(2, "_"));
}
// 2nd version
function solution(str) {
  return (str + "_").match(/.{2}/g) || [];
}
