
function Mahasiswa(nama, energy) {

    this.nama = nama;
    this.energy = energy;

};

Mahasiswa.prototype.eat = function(portion) {
    this.energy += portion;
    return this;
}

Mahasiswa.prototype.games = function(time) {
    this.energy -= time;
    return this;
}

let saya = new Mahasiswa('Pramudya', 75);
let anda = new Mahasiswa('Alfin', 90);