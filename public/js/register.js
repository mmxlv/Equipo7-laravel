window.addEventListener('load', function () {
// VALIDACION NAME
var nombreCompleto = document.querySelector("#name");

var rojoVerde = function() {
  if (nombreCompleto.value.length > 2 ) {
    nombreCompleto.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
  }else {
    nombreCompleto.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
  }
}
nombreCompleto.addEventListener('blur', rojoVerde);

  // VALIDACION EMAIL
var email = document.querySelector("#email");

var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
function validarEmail(){
  if (emailRegex.test(email.value)) {
    email.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
  } else {
    email.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
  }

}
email.addEventListener('input', validarEmail);

// VALIDAR Password
var password = document.querySelector('#password');

var passRegex = "^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$";// minimo 8 letras,
//un simbolo obligatorio, una mayuscula, una minuscula y un numero

var validarPass = function() {
  if (passRegex.test(password.value)) {
    password.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
  } else {
    password.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
  }

}
password.addEventListener('blur', validarPass);

});
