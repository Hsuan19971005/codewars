// Detect Pangram
function isPangram(string) {
  string = string.toLowerCase();
  let alphabets = [..."abcdefghijklmnopqrstuvwxyz"];
  for (let i = 0; i < alphabets.length; i++) {
    if (!string.includes(alphabets[i])) {
      return false;
    }
  }
  return true;
}
