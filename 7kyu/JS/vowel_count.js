// Vowel Count
function getCount(str) {
  return (str.match(/[aeiou]/g) || []).length;
}
