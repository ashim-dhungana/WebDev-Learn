// If-Else
let var1 = 5;
let var2 = "5";
if (var1 === var2) {
  console.log("They are same.");
} else if (var1 == var2) {
  console.log("Their value is same but datatype is different.");
}

console.log("\n");

// For Loop
for (i=0; i<5; i++){
  console.log(i);
}

console.log("\n");

// For Of Loop - Used for arrays
let num = [1,2,3,4];
for (const element of num) {
  console.log(`The number is ${element}`);
}

console.log("\n");

// For In Loop - Used for dictionary
let employee = {
  name:"Ashim",
  income:1000000,
  position:"CEO"
}
for (const key in employee) {
  console.log(`The ${key} of employee is ${employee[key]}`);
}