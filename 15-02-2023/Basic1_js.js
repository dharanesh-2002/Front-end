
const change=document.querySelector(".name");
change.addEventListener('click', update_name);
// change.addEventListener('click', update_name()); It will repeatly call while refresh.

function update_name(){
    const myname = prompt('Enter your name:');
    change.textContent =`Updated : ${myname}`;
}