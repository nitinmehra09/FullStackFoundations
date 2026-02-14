let sumEl = document.getElementById("sum-el");
function Subtract(){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let ans = num1 - num2;
    sumEl.innerText = ("Subtraction = "+ ans);
}

function add(){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let ans = num1 + num2;
    sumEl.innerText = ("addition = "+ ans);
}

function Divide(){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let ans = num1 / num2;
    sumEl.innerText = ("Division = "+ ans);
}

function Multiply(){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let ans = num1 * num2;
    sumEl.innerText = ("Multiplication = "+ ans);
}
