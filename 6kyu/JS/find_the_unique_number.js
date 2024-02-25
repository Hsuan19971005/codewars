// Find the unique number

function findUniq(arr) {
  if (arr[0] == arr[1]) {
    for (let i = 2; i < arr.length; i++) {
      if (arr[0] !== arr[i]) return arr[i];
    }
  } else {
    return arr[0] === arr[2] ? arr[1] : arr[0];
  }
}
