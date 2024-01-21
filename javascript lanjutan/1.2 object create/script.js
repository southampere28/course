

const methodMhs = {
    
    eat : function (portion) {
        this.energy += portion;
        return this;
    },

    games : function (time) {
        this.energy -= time;
        return this;
    }
};


function Mahasiswa(nama, energy) {
    // let mahasiswa = {};
    let mahasiswa = Object.create(methodMhs);

    mahasiswa.nama = nama;
    mahasiswa.energy = energy;

    // ===== instead of use this method, lets use object create
    // mahasiswa.eat = methodMhs.eat;
    // mahasiswa.games = methodMhs.games;

    return mahasiswa;
};

let saya = Mahasiswa('Pramudya', 75);
let anda = Mahasiswa('Alfin', 90);