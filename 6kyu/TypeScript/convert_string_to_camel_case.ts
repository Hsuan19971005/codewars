// Convert string to camel case
export function toCamelCase(str: string): string {
  const words = str.split(/[-_]/);
  if (words.length <= 1) return words[0];

  const firstWord: string = words[0];
  const restWords: string[] = words
    .slice(1)
    .map((word) => `${word[0].toUpperCase()}${word.slice(1)}`);
  return `${firstWord}${restWords.join("")}`;
}
