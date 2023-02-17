const first = document.querySelector('button');
const cont = document.querySelector('p');

first.addEventListener('click', press);
function press() {
    if (first.textContent == 'Start') {
        first.textContent = "Stop";
        cont.textContent = "Stop Ur game!!!"
    }
    else {
        first.textContent = "Start";
        cont.textContent = "Start Ur game!!!"
    }
}