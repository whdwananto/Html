// cara buat variabel bisa 2 const atau let
const nama = "Wahyu Dwi Ananto";
let usia = 20;

let biodata =  document.getElementById('biodata');
console.log(biodata)

// tanda kutip disamping angka
console.log(`Nama saya adalah ${nama} dan usia saya ${usia} tahun.`)
// tanda kutip disamping enter
console.log('Nama saya adalah', nama, 'dan usia saya', usia, 'tahun.')

//console dengan function
function generateBiodata(){
    let generasi;

    console.log('Console dalam function')
    console.log(`Nama : ${nama} , usia : ${usia} tahun.`)
    // if else untuk console
    if(usia >= 17 && usia <= 22){
        generasi="anda beranjak dewasa"
        // console.log('anda beranjak dewasa')
    }else if(usia > 22){
        generasi="anda dewasa"
        // console.log('anda dewasa')
    }else if(usia<17 && usia>=2) {
        generasi="anda anak anak"
        // console.log ('anda anak anak')
    }else {
        generasi="anda balita"
    } 
    // cara panggil generasi
    // return console.log('Hi ,', generasi)
    // panggil generasi ke div biodata
    return biodata.innerHTML = generasi;
}
// panggil function
generateBiodata()