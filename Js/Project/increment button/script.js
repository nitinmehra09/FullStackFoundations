let count = 0
let previousEntries = document.getElementById("save-el");
let countEl = document.getElementById("count-el");
let hasSaved = false;

function increment() {
    if(count >= 10){
        alert("Limit Reached 🚫");
    }else{
        count = count +1;
        countEl.innerText = count;
    }
}
function decrement() {
    if(count>0){
        count = count -1;
    }
    countEl.innerText = count;
}
function reset() {
    count = 0;
    countEl.innerText = count;
    previousEntries.textContent = "Previous entries: 0";
    hasSaved = false;
}
function save(){
    if(hasSaved){
        previousEntries.textContent += (count + " - ");
    }else{
        previousEntries.textContent = ("Previous entries: " +(count + " - "));
        hasSaved = true;
    }
    countEl.innerText = 0;
    count = 0;
    console.log(count);
}