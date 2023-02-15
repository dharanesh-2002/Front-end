
document.querySelector("p").textContent = "Java-script";
console.log("Displayed in Console");
const mypage = document.querySelector("h1");
mypage.textContent = "Basic Java Script";

// Variable declaration
let myname;
myname = "Dharan";
console.log(myname);
myname = "Dharanesh";
console.log(myname);

// Conditionals
let myid = 108;
if (myid === 108) {
    add(myid, 10);
}
else {
    console.log("Wrong input");
}

// Functions
function add(num1, num2) {
    let addnum = num1 + num2;
    if (addnum === 118) {
        greet(addnum);
    }
}
function greet(num3) {
    console.log(num3 + " " + "Function call Js")
}

// Events
document.querySelector("button").addEventListener("click", function () {
    alert("Alert!!! Don't Click");
});