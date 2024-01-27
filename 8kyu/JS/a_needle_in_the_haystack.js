// A Needle in the Haystack
function findNeedle(haystack) {
  let index = haystack.findIndex((e) => e === "needle");
  return `found the needle at position ${index}`;
}
