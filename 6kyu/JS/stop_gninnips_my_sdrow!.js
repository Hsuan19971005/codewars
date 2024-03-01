//  Stop gninnipS My sdroW!
function spinWords(string) {
  return string
    .split(" ")
    .map((e) => {
      return e.length >= 5 ? e.split("").reverse().join("") : e;
    })
    .join(" ");
}
