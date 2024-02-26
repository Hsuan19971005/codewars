// Find The Parity Outlier
function findOutlier(integers) {
  let odd = [];
  let even = [];
  integers.forEach((e) => (e % 2 == 0 ? even.push(e) : odd.push(e)));
  return odd.length == 1 ? odd[0] : even[0];
}
