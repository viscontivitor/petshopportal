var usuario = document.getElementById("usuario");
var email = document.getElementById("email");
var senha = document.getElementById("senha");
var confsenha = document.getElementById("confirmacao-senha");
var enviarformulario = document.getElementById("enviarformulario");
var termosservico = document.getElementById("termosservicobox");
/*var myInput = document.getElementById("senha");/** */
var letter = document.getElementById("minuscula");
var capital = document.getElementById("maiuscula");
var number = document.getElementById("numero");
var comprimento = document.getElementById("letras");
var emailtxt = document.getElementById("emailtxt");
// When the user clicks on the password field, show the message box
var myInput = document.getElementById('senha');
myInput.onfocus = function () {
    var caixamsg = document.getElementById("caixamsg");
    caixamsg.style.display = "flex";
};
// When the user clicks outside of the password field, hide the message box
myInput.onblur = function () {
    var caixamsg = document.getElementById("caixamsg");
    caixamsg.style.display = "none";
};
// When the user starts to type something inside the password field
myInput.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    }
    else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    }
    else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }
    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    }
    else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }
    // Validate length
    if (myInput.value.length >= 8) {
        comprimento.classList.remove("invalid");
        comprimento.classList.add("valid");
    }
    else {
        comprimento.classList.remove("valid");
        comprimento.classList.add("invalid");
    }
};
var validateEmail = function (email) {
    return email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
};
var validate = function () {
    var $result = $('#result');
    var email = $('#email').val();
    $result.text('');
    if (validateEmail(email)) {
        $result.text(email + ' é válido :)');
        $result.css('color', 'green');
    }
    else {
        $result.text(email + ' não é válido :(');
        $result.css('color', 'red');
    }
    return false;
};
$('#email').on('input', validate);
