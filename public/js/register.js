window.addEventListener('load', function () {

var formRegistro = document.forms[1];

  var errors = {};

  var nombreCompleto = document.querySelector("#name");

  var validarNombre = function() {
    if (nombreCompleto.value.length > 2 ) {
      nombreCompleto.style.backgroundColor = "rgba(21, 149, 0, 0.5)";
      delete errors.name
    }else {
      nombreCompleto.style.backgroundColor = "rgba(227, 22, 22, 0.53)";
      errors.name = "nombre invalido"
    }
  }

  nombreCompleto.addEventListener('change', validarNombre);

  var email = document.querySelector("#email");

  var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

  function validarEmail(){
    if (emailRegex.test(email.value)) {
      email.style.backgroundColor = "rgba(21, 149, 0, 0.5)";
      delete errors.email
    } else {
      email.style.backgroundColor = "rgba(227, 22, 22, 0.53)";
      errors.email = "Email invalido"
    }

  }

  email.addEventListener('change', validarEmail);

  var password = document.querySelector('#password');

  var passRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

  var validarPass = function() {
    if (passRegex.test(password.value)) {
      password.style.backgroundColor = "rgba(21, 149, 0, 0.5)";
      delete errors.password
    } else {
      password.style.backgroundColor = "rgba(227, 22, 22, 0.53)";
      errors.password = "Contraseña invalida"
    }

  }

  password.addEventListener('change', validarPass);

  var cpassword = document.querySelector("#password-confirm");

  var validarPassConfirm = function() {
    if (cpassword.value == password.value) {
      cpassword.style.backgroundColor = "rgba(21, 149, 0, 0.5)";
      delete errors.cpassword
    } else {
      cpassword.style.backgroundColor = "rgba(227, 22, 22, 0.53)";
      errors.cpassword = "Las contraseñas no coinciden"
    }
  }

  cpassword.addEventListener("change", validarPassConfirm);

var submitter = function(event){
  function checkpoint(){
    if (Object.keys(errors).length > 0) {
      return false;
    } else {
      return true;
    }
  }
 if (checkpoint() !== true) {
   event.preventDefault();
 }
}

formRegistro.addEventListener("submit", submitter, false);

});//fin window
