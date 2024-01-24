function Mahasiswa(nama, energy) {
    this.nama = nama;
    this.energy = energy;    
}

let mhs1 = new Mahasiswa('mahendra', 90);
let mhs2 = new Mahasiswa('pramudya', 90);


Mahasiswa.prototype.eating = function (portion) {
    this.energy += portion;
    return this;
}

