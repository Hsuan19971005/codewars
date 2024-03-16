// Directions Reduction
function dirReduc(arr) {
  const dir = {NORTH: "SOUTH", SOUTH: "NORTH", EAST: "WEST", WEST: "EAST"};
  let result = [];
  arr.forEach((e, i) =>
    result[result.length - 1] === dir[e] ? result.pop() : result.push(e)
  );
  return result;
}
