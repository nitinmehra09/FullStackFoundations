let count = 0
let previousEntires = document.getElementById("save-el");
let countEl = document.getElementById("count-el");

function increment() {
    count = count +1;
    countEl.innerText = count;
}
function save(){
    previousEntires.textContent += (count + " - ");
    countEl.innerText = 0;
    count = 0;
    console.log(count);
}