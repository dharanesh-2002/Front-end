const get = document.querySelector("#Press");
get.addEventListener('click', action);
const heading_2 = document.querySelector("#heading2");
function action() {
    const name = prompt('What is your name?');
    alert(`Hello ${name}, click ok`);
    heading_2.textContent = `Hii  ${name}, Welcome to my page`;
}