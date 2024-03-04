// Are they the "same"?
function comp(array1, array2) {
  if (!array1 || !array2 || array1.length !== array2.length) {
    return false;
  }

  array1.sort((a, b) => a - b);
  array2.sort((a, b) => a - b);
  return array1.every((e, i) => e ** 2 === array2[i]);
}
