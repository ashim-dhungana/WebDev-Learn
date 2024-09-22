let arr1 = ["Apple",55];
console.log(arr1);

arr1.push("Mango");
console.log(arr1);

arr1.shift();
console.log(arr1);

arr1.unshift("Banana");
console.log(arr1);

arr1.pop();
console.log(arr1);

console.log("\n");

// Built-In Objects

// Math Object
console.log(`A random number: ${Math.random()}`);
console.log(`Maximum of 3 numbers: ${Math.max(1,5,3)}`);
console.log(`Minimum of 3 numbers: ${Math.min(1,5,3)}`);
console.log(`Result of 3^3: ${Math.pow(3,3)}`);

console.log("\n");

// String Objects

// Date Objects
let today = new Date();
console.log(today);
console.log(today.getFullYear());
console.log(today.getMonth());
console.log(today.getDate());