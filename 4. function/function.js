// cara 1
function kelilingPersegi(sisi) {
  const keliling = sisi * 4
  return keliling
}

// cara 2
const kelilingPersegi2 = function (sisi) {
  const keliling = sisi * 4
  return keliling
}

// cara 3
const kelilingPersegi3 = sisi => sisi * 4

console.log(kelilingPersegi3(10))