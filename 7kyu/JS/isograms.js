// Isograms
// 1st version
function isIsogram(str) {
  let arr = str.toLowerCase().split("");
  for (let i = 0; i < arr.length; i++) {
    if (arr.indexOf(arr[i], i + 1) !== -1) return false;
  }
  return true;
}
// 2nd version
function isIsogram(str) {
  return new Set(str.toUpperCase()).size == str.length;
}
