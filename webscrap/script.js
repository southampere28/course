const endpoint = 'https://jsonplaceholder.typicode.com/users'

// ========= Using Then ============

// function loadData() {
//     fetch(endpoint)
//     .then(response => response.json())
//     .then(data => console.log(data));
// }
    
// loadData();


// ========= Using Await Fetch ============

const tbody = document.querySelector('tbody');
let users = [];

const loadData = async () => {
    
    try{
        const response = await fetch(endpoint);
        users = await response.json();
        console.log(users);
        // return users;
        loadUserdata(users);
    } catch(err) {
        console.log(err);
        return 0;
    }
}


// async function hitAPI () {
//     const response = await fetch(endpoint);
//     const users = await response.json();
//     console.log(users);
// }

// hitAPI();

const loadUserdata = (data) => {
    let no = 1;
    const output = data.map(el => {
        
        // get address location
        const { street:alamat_jalan, suite:nomor_bangunan } = el.address
        
        // get address coordinates
        const { lat, lng } = el.address.geo;

        // get company profiles
        const {name:compsname} = el.company;

        return `
        <tr>
            <td>${no++}</td>
            <td>${el.name}</td>
            <td>${el.email}</td>
            <td>${el.address.city}</td>
            <td>${alamat_jalan}, ${nomor_bangunan}</td>
            <td>${lat}, ${lng}</td>
            <td>${compsname}</td>
        </tr>`
    }).join('');

    tbody.innerHTML = output;
}

// loadUserdata(loadData());
loadData();