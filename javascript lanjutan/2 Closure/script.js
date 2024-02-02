
// closure init

function init() {
    let nama = "pramudya";
    return function(nama) {
        console.log(nama);
    }
}

let callName = init();
callName("putra");




// implementation
// ====== function factory =======

ucapkanSalam = (waktu) => {
    return function (nama) {
        console.log(`Halo ${nama}, Selamat ${waktu}`);
    
    }
}

let sayGoodmorning = ucapkanSalam('Pagi');
let sayGoodevening = ucapkanSalam('Malam');

sayGoodmorning('Pramudya');
sayGoodevening('Putra');

console.dir(sayGoodmorning);

// ====== function factory2 =======
let add = (function () {
    let counter = 0;
    return function () {
        return ++counter;
    }
})();   // use SIAF


// let a = add();
let counter = 100;   // counter tidak akan terbaca di func add

console.log(add());
console.log(add());
console.log(add());
// console.log(a());
// console.log(a());
