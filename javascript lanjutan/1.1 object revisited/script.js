// Cara untuk membuat Object pada javascript

// 1. object literal

let mhs = {
    nama : "Pramudya Putra",
    energy : 80,
    eat : function (portion) {
        this.energy += portion;
        return mhs;
    }

    // input mhs.eat(portion number)
    // expected output : mhs{...., energy: 80+portion, ...}
}

let mhs2 = {
    nama : "Putra Pratama",
    energy : 90,
    eat : function (portion) {
        this.energy += portion;
        return mhs2;
    }

    // input mhs2.eat(portion number)
    // expected output : mhs2{...., energy: 90+portion, ...}
}



// 2. function declaration
function Mahasiswa(nama, energy) {
    let mahasiswa = {};
    mahasiswa.nama = nama;
    mahasiswa.energy = energy;

    mahasiswa.eat = function (portion) {
        this.energy += portion;
        return mahasiswa;
    }

    return mahasiswa;
}

let saya = Mahasiswa('Pramudya', 75);
let anda = Mahasiswa('Alfin', 90);


// 3. constructor function
// menggunakan keyword new
function MahasiswaConst(nama, energy) {

    this.nama = nama;
    this.energy = energy;

    this.eat = function (portion) {
        this.energy += portion;
        return this;
    }

}

let sayakons = new MahasiswaConst('Pramudya', 75);
let andakons = new MahasiswaConst('Alfin', 90);




// 4. object create
// next study
