let hands = ["rock", "paper", "scissor"]

// Create a function that returns a random item from the array
let choise = hands[(Math.floor(Math.random()*hands.length))];
console.log(choise);