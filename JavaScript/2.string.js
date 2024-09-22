let name = "Ashim";
let string = "he is a god.";

// Creating template to fill later and to use both double quotes single quotes in same line
let temp = `${name} is an amazing man and wherever he goes, ${string}`;
console.log(temp);

let len = name.length;
console.log(`The length of name is ${len}`);

// Slicing
console.log(name.slice(1, 3));

console.log(name.replace("im", 77));

// Inserting html code using JavaScript
// document.getElementById("content").innerHTML =
//   "<h3>This is a new heading inserted using JavaScript</h3>";

// STRING FUNCTIONS

var position = string.indexOf("is");
console.log(`The position of "is" in string "${string}" is ${position}`);
