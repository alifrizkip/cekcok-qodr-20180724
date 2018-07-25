// if
const angka = 1
if (angka === 1) {
  console.log('Ini angka 1')
}

// if else
if (angka === 1) {
  console.log('Ini angka 1')
} else {
  console.log('Ini bukan angka 1')
}

// else if
const moreThanFive = 6
if (moreThanFive < 5) {
  console.log('Angka kurang dari 5')
} else if(moreThanFive > 5 && moreThanFive < 10) {
  console.log('Angka lebih dari 5 dan kurang dari 10')
} else {
  console.log('Angka lebih dari 5 dan 10')
}

// ternary
const isTrue = false
isTrue === true ? console.log('Ini benar') : console.log('Ini salah')