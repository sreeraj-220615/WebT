let name = "Sreeraj";
let age = 20;
let isStudent = true;

console.log(name, age, isStudent);
function greet() {
    console.log("Hello, " + name + "!");
}   
greet();
function calculateYearOfBirth(currentYear) {
    return currentYear - age;
}
console.log("Year of Birth: " + calculateYearOfBirth(2024));
if (isStudent) {
    console.log(name + " is a student.");
} else {
    console.log(name + " is not a student.");
}   
for (let i = 1; i <= 5; i++) {
    console.log("Count: " + i);
}
let hobbies = ["Reading", "Traveling", "Coding"];
console.log("Hobbies: " + hobbies.join(", "));
hobbies.forEach(function(hobby) {
    console.log("Hobby: " + hobby);


});
let person = {
    name: name,
    age: age,



    isStudent: isStudent
};
