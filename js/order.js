
function createRow(a, b=null, c=null) {
    if (a && b && c) {
        const row = `
        <div class="box-2">
            <div class="polaroid">
                <img src="./${a.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${a.name}</h2>
                    <p>${a.description}</p>
                     <small class="price">Price: ${a.price}</small>
                </div>
            </div>

            <div class="polaroid">
                <img src="./${b.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${b.name}</h2>
                    <p>${b.description}</p>
                     <small class="price">Price: ${b.price}</small>
                </div>
            </div>

            <div class="polaroid">
                <img src="./${c.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${c.name}</h2>
                    <p>${c.description}</p>
                     <small class="price">Price: ${c.price}</small>
                </div>
            </div>
        </div>`;
        document.querySelector('.list-data').insertAdjacentHTML('beforeEnd', row);
    } else if (a && b) {
        const row = `
        <div class="box-2">
            <div class="polaroid">
                <img src="./${a.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${a.name}</h2>
                    <p>${a.description}</p>
                     <small class="price">Price: ${a.price}</small>
                </div>
            </div>

            <div class="polaroid">
                <img src="./${b.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${b.name}</h2>
                    <p>${b.description}</p>
                    <small class="price">Price: ${b.price}</small>
                </div>
            </div>
        </div>`;
        document.querySelector('.list-data').insertAdjacentHTML('beforeEnd', row);
    } else {
        const row = `
        <div class="box-2">
            <div class="polaroid">
                <img src="./${a.url}" alt="Spelt Bread" style="width:100%">
                <div class="description">
                    <h2>${a.name}</h2>
                    <p>${a.description}</p>
                    <small class="price">Price: ${a.price}</small>
                </div>
            </div>
        </div>`;
        document.querySelector('.list-data').insertAdjacentHTML('beforeEnd', row);
    }
}

function getProducts() {

    fetch('action/get_products.php', {
            headers: {
                'Content-Type': 'application/json',
            }
        }
        ).then((res) => res.json())
        .then(response => {
            let length = response.length;
            for(let i = 0; length > 0; i += 3) {
                if(length >= 3) {
                    createRow(response[i], response[i+1], response[i+2]);
                } else if (length >= 2) {
                    createRow(response[i], response[i+1]);
                } else if (length == 1) {
                    createRow(response[i]);
                }
                length -= 3;
            }
        }).catch(error => console.log(error));
}

getProducts();
const filters = document.querySelectorAll('.filter-btn');

function choseType() {
    document.querySelector('.active-filter').disabled = false;
    document.querySelector('.active-filter').classList.remove('active-filter');
    this.classList.add('active-filter');
    this.disabled = true;
    document.querySelector('.list-data').innerHTML = '';

    // const newForm = document.createElement('form');
    // newForm.method = "POST";
    // newForm.action = 'action/filter.php';
    //
    // const data = new URLSearchParams();
    //
    // for(const p of new FormData(newForm)) {
    //     data.append(p[0], p[1]);
    // }
    //
    // const input = document.createElement('input');
    // input.name = 'filter';
    // input.value = this.innerText;
    //
    // newForm.append(input);

    const filter = 'action/filter.php/?filter=' + this.innerText;

    fetch(filter, {
            headers: {
                'Content-Type': 'application/json',
            }
        }
    ).then((res) => res.json())
        .then(response => {
            let length = response.length;
            for(let i = 0; length > 0; i += 3) {
                if(length >= 3) {
                    createRow(response[i], response[i+1], response[i+2]);
                } else if (length >= 2) {
                    createRow(response[i], response[i+1]);
                } else if (length == 1) {
                    createRow(response[i]);
                }
                length -= 3;
            }
        }).catch(error => console.log(error));
}

filters.forEach(elem => elem.addEventListener('click', choseType));



    // .then(data => console.log(data))
    // .catch(err => console.log(err))

