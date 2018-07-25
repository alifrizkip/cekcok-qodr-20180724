const flipText = text => {
  const flippedText = text.split('').reverse().join('')

  return flippedText
}

console.log(flipText('Alif Rizki Pambudi'))