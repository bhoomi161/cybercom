//Js coding challeng 1
//calculate BMI

//mark information
var mark_mass=80
var mark_height=1.50

//calculating mark's Body Mass Index
var mark_BMI=mark_mass/(mark_height*mark_height);
console.log(mark_BMI);

//John information
var John_mass=90
var John_height=2

//calculating john's Body Mass Index
var john_BMI=John_mass/(John_height*John_height);
console.log(john_BMI);

//Comparing john's and mark's BMI
var compare_BMI=mark_BMI>john_BMI;

console.log(" Mark BMI is greater than John BMI"+" :"+compare_BMI);



