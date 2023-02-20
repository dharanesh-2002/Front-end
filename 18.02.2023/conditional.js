
const select = document.querySelector('select');
const html = document.querySelector('html');
document.body.style.padding = '10px';

function update(bgColor, textColor) {
    html.style.backgroundColor = bgColor;
    html.style.color = textColor;
}

select.addEventListener('change', () => select.value === 'black'
    ? update('black', 'white')
    : update('white', 'black')
);
const opt = document.querySelector('#Department');
opt.addEventListener('change', greet);
const cont = document.querySelector('p');
const department = document.querySelector('#Dept');

function greet() {
    const myName = prompt('Enter your name');
    const option = opt.value;
    if (option == 'EEE') {
        cont.textContent = `Hi ${myName}, you have choosed ${option} department`
    }
    else if (option == 'ECE') {
        cont.textContent = `Hi ${myName}, you have choosed ${option} department`
    }
    else if (option == 'Mechanical') {
        cont.textContent = `Hi ${myName}, you have choosed ${option} department`
    }
    else {
        cont.textContent = `Hi ${myName}, you have choosed ${option} department`
    }

    switch (option) {
        case 'EEE':
            department.textContent = `${option} has an future scope and wonderful department`
            break;
        case 'ECE':
            department.textContent = `${option} has an future scope and wonderful department`
            break;
        case 'Mechanical':
            department.textContent = `${option} has an future scope and wonderful department`
            break;
        default:
            department.textContent = `${option} has an future scope and wonderful department`
    }
}


