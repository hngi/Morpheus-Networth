const assets = document.getElementById('assets');
const liabilities = document.getElementById('liability');
const networth = document.getElementById('networth');

const showa = document.getElementById('asset');
const showl = document.getElementById('liab');
const shown = document.getElementById('net');

function show(item) {
   // item.classList.add("show");

    item.style.display == "none" ? item.style.display = "flex" : item.style.display = "none" ;

}

assets.addEventListener('click', (e) => {
   show(showa)
} )

liabilities.addEventListener('click', (e) => {
    show(showl)
} )

networth.addEventListener('click', (e) => {
    show(shown)
} )


