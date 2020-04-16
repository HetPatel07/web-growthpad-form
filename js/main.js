const form = document.getElementById('form');
const mail = document.getElementById('email');
const pass = document.getElementById('pass');

form.addEventListener("submit", (e) => {
    e.preventDefault();

    checkInputs();
})

function checkInputs() {
    const mailValue = mail.value.trim();
    const passValue = pass.value.trim();

    if (mailValue === '') {
        errorMsg(mail);
    } else {
        successMsg(mail);
    }

    if (passValue === '') {
        errorMsg(pass);
    } else {
        successMsg(pass);
    }
}

function errorMsg(name) {
    name.parentElement.classList.add('error');

    console.log(name);
    name.parentElement.classList.remove('success');
}

function successMsg(name) {
    name.parentElement.classList.add('success');
    console.log(name);
    name.parentElement.classList.remove('error');
}



$('.wrong').hover(function() {
    var span = this.previousElementSibling;
    console.log(span);
    span.style.visibility = "visible";

}, function() {
    var span = this.previousElementSibling;
    span.style.visibility = "hidden";
})