const endPoint = 'https://dummyjson.com/users';
const tbody = document.querySelector('tbody');

async function getData() {

    const result = await fetch(endPoint);
    const { users:data } = await result.json();

    console.log(data);

    display(data);
}

function display(data) {

    const maps = data.map(el => {
        
        // declare address
        const { address, city } = el.address;
        // declare address coordinates
        const { lat, lng } = el.address.coordinates;
        
        return `
            <tr>
                <td>${el.firstName}</td>
                <td>${el.lastName}</td>
                <td>${city}</td>
                <td>${address}</td>
                <td>${lat}, ${lng}</td>
                <td>${address}</td>
            </tr>`
    }).join('');

    tbody.innerHTML = maps;
}

getData();