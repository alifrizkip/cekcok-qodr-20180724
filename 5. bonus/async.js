const start = new Date()

const getProvince = new Promise((resolve, reject) => {
  setTimeout(() => {
    resolve(console.log(`Get province data successfully. After ${(new Date() - start)} ms`))
  }, 2000)
})

const getSubdistrict = new Promise((resolve, reject) => {
  setTimeout(() => {
    resolve(console.log(`Get subdistrict data successfully. After ${(new Date() - start)} ms`))
  }, 3000)
})

// ================================

getIndonesiaLocationData = () => {
  getProvince
  getSubdistrict
}

getIndonesiaLocationData()
