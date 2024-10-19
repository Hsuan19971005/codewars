// Your order, please
// Version 1
export function orderV1(words: string): string {
  if (words === "") return words;

  const map = new Map<string, string>();

  const arr = words.split(" ");
  for (const word of arr) {
    const number = word.match(/[1-9]/)![0];
    map.set(number, word);
  }

  return [...map.keys()]
    .sort()
    .map((number) => map.get(number))
    .join(" ");
}

// Version 2
export function orderV2(words: string): string {
  //   if(words === "") return words;
  //   if the array only have 1 element, the callback function won't be invoked
  return words
    .split(" ")
    .sort((a, b) => parseInt(a.match(/\d/)![0]) - parseInt(b.match(/\d/)![0]))
    .join(" ");
}
