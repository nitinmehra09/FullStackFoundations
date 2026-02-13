let num1 = 5;
let num2 = 10;
document.getElementById("num1-el").innerText = num1;
document.getElementById("num2-el").innerText = num2;
let sumEl = document.getElementById("sum-el");
function Subtract(){
    let ans = num1 - num2;
    sumEl.innerText = ("Subtraction = "+ ans);
}

function add(){
    let ans = num1 + num2;
    sumEl.innerText = ("addition = "+ ans);
}

function Divide(){
    let ans = num1 / num2;
    sumEl.innerText = ("Division = "+ ans);
}

function Multiply(){
    let ans = num1 * num2;
    sumEl.innerText = ("Multiplication = "+ ans);
}
