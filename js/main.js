// const form = document.getElementById('form');
// const mail = document.getElementById('validationCustom03');
// const pass = document.getElementById('validationCustom01');
// console.log(form);
// form.addEventListener("submit", (e) => {
//     e.preventDefault();

//     checkInputs();
// })

// function checkInputs() {
//     const mailValue = mail.value.trim();
//     const passValue = pass.value.trim();

//     if (mailValue === '') {
//         errorMsg(mail);
//     } else {
//         successMsg(mail);
//     }

//     if (passValue === '') {
//         errorMsg(pass);
//     } else {
//         successMsg(pass);
//     }
// }

// function errorMsg(name) {
//     name.parentElement.classList.add('error');

//     console.log(name);
//     name.parentElement.classList.remove('success');
// }

// function successMsg(name) {
//     name.parentElement.classList.add('success');
//     console.log(name);
//     name.parentElement.classList.remove('error');
// }



// $('.wrong').hover(function() {
//     var span = this.previousElementSibling;
//     console.log(span);
//     span.style.visibility = "visible";

// }, function() {
//     var span = this.previousElementSibling;
//     span.style.visibility = "hidden";
// })

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();