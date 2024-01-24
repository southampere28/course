const endPoint = 'https://dummyjson.com/products';
const tbody = document.querySelector('.tbd-phone');
const tbodylaptop = document.querySelector('.tbd-laptop');

const init = async () => {

    try {
        
        const result = await fetch(endPoint);
        const {products:data} = await result.json();
        
        console.log(data);
    
        showData(data);
        showdatalaptop(data);
    
    }catch (err) {
        console.info(err);
    }
}

const showData = (data) => {
    let no = 1;
    const maps = data
    .filter(el => el.category.includes("phone"))
    .map(el => {

        return `
        <tr>
            <td>${no++}</td>
            <td>${el.title}</td>
        </tr>`
    }).join('');


    tbody.innerHTML = maps;

}

const showdatalaptop = (data) => {
    let no = 1;
    const maps = data
    .filter(el => el.category.includes("laptops"))
    .map(el => {

        return `
        <tr>
            <td>${no++}</td>
            <td>${el.title}</td>
        </tr>`
    }).join('');


    tbodylaptop.innerHTML = maps;
}

init();