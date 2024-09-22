var a = "Ashim";
var b = 23;

console.log(a);
console.log(b);

console.log("The age of " + a + " is " + b);
console.log("\n");

// Value of variable created using "let" can be temporarily changed but "var" is permanent.
var string1 = "This is first string";
let string2 = "This is second string";
console.log(string1);
console.log(string2);

{
  var string1 = "This is third string";
  console.log(string1);
}
{
  let string2 = "This is fourth string";
  console.log(string2);
}

console.log(string1);
console.log(string2);