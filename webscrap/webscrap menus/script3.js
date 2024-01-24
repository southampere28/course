const endPoint = 'https://dummyjson.com/recipes';
const tbody = document.querySelector('tbody');

async function getData() {
    
    const result = await fetch(endPoint);
    const {recipes:data} = await result.json();

    console.log(data);
    
    display(data);
}

function display(data) {
    
    const maps = data
    .map(el => {

        const ul = document.createElement('ul');
        const ol = document.createElement('ol');

        const { ingredients, instructions } = el;
        
        ingredients.forEach(element => {
            const li = document.createElement('li');

            li.textContent = element;
            ul.appendChild(li);
        });

        instructions.forEach(element => {
            const li = document.createElement('li');

            li.textContent = element;
            ol.appendChild(li);
        })

        return `
            <tr>
                <td>${el.id}</td>
                <td>${el.name}</td>
                <td><img src="${el.image}" alt="img-menus" width="100" height="100"></td>
                <td>${ul.outerHTML}</td>
                <td>${ol.outerHTML}</td>
            </tr>`
    })
    .join('');

    tbody.innerHTML = maps;


}

getData();