// 1
let akun_ml = 10
let teman = 4

akun_ml%teman

function testing(){
    for(let i=1; i<=akun_ml; i++){
        if(i%2 == 0){
            console.log('ini genap', i)
        }else{
            console.log('ini ganjil', i)
        }
    }
}

testing()

// 2
function tambah(nilai1, nilai2){
    return nilai1+nilai2
}
function kurang(nilai1,nilai2){
    return nilai1-nilai2
}
function kali(nilai1,nilai2){
    return nilai1*nilai2
}
function bagi(nilai1,nilai2){
    return nilai1/nilai2
}
tambah(20,5)

function calculate(nilai1,nilai2,arg){
    switch (arg){
        case'tambah':
            return tambah (nilai1,nilai2)
        case'kurang':
            return kurang (nilai1,nilai2)
        case'kali':
            return kali (nilai1,nilai2)
        case'bagi':
            return bagi (nilai1,nilai2)
    }
}
calculate(20,5,'tambah')