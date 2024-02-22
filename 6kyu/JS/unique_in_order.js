// Unique In Order
// 1st version
var uniqueInOrder = function (iterable) {
  if (typeof iterable == "string") {
    iterable = iterable.split("");
  }

  for (let i = 0; i < iterable.length - 1; i++) {
    if (iterable[i] == iterable[i + 1]) {
      iterable.splice(i + 1, 1);
      i--;
    }
  }
  return iterable;
};

// 2nd version
var uniqueInOrder = function (iterable) {
  if (typeof iterable == "string") {
    iterable = iterable.split("");
  }
  return iterable.reduce((acc, cur) => {
    if (cur !== acc[acc.length - 1]) {
      acc.push(cur);
    }
    return acc;
  }, []);
};

// 3rd version
var uniqueInOrder = function (iterable) {
  return [...iterable].filter((e, i) => e != iterable[i - 1]);
};
