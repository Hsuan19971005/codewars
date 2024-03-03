// Array.diff
function arrayDiff(a, b) {
  for (let i = 0; i < a.length; i++) {
    if (b.includes(a[i])) {
      a.splice(i, 1);
      i--;
    }
  }
  return a;
}

function arrayDiff(a, b) {
  return a.filter((e) => !b.includes(e));
}
