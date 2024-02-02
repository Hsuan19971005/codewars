// Number of People in the Bus
var number = function (busStops) {
  return busStops.reduce((acc, cur) => acc + cur[0] - cur[1], 0);
};
