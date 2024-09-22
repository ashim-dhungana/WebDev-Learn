let name = "Ashim";
let string = "he is a god.";

// Creating template to fill later and to use both double quotes single quotes in same line
let temp = `${name} is an amazing man and wherever he goes, ${string}`;
console.log(temp);


// FUNCTIONS PROVIDED BY BUILT-IN STRING OBJECT

// Length
let len = name.length;
console.log(`The length of name is ${len}`);

// Uppercase and Lowercase
console.log(string.toUpperCase());
console.log(string.toLowerCase());

// Splitting
console.log(string.split(" "));

// Slicing
console.log(name.slice(1, 3));

// Replacing
console.log(name.replace("im", 77));

// Index Of String
let position = string.indexOf("is");
console.log(`The position of "is" in string "${string}" is ${position}`);