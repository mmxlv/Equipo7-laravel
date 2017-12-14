window.addEventListener('load', function () {
var errores = false;
// VALIDACION NAME
var nombreCompleto = document.querySelector("#name");

var rojoVerde = function() {
  if (nombreCompleto.value.length > 2 ) {
    nombreCompleto.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
    errores = false;
  }else {
    nombreCompleto.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
    errores = true;
  }
}
nombreCompleto.addEventListener('blur', rojoVerde);

  // VALIDACION EMAIL
var email = document.querySelector("#email");

var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
function validarEmail(){
  if (emailRegex.test(email.value)) {
    email.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
    errores = false;
  } else {
    email.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
    errores = true;
  }

}
email.addEventListener('change', validarEmail);

// VALIDAR Password
var password = document.querySelector('#password');

var passRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;// minimo 8 letras,
//una mayuscula, una minuscula y un numero

var validarPass = function() {
  if (passRegex.test(password.value)) {
    password.style.backgroundColor = "rgba(21, 149, 0, 0.5)";//Verde;
    errores = false;
  } else {
    password.style.backgroundColor = "rgba(227, 22, 22, 0.53)";//Rojo
    errores = true;
  }

}
password.addEventListener('blur', validarPass);

// Validacion general del registro
var formRegistro = document.forms[1];

formRegistro.addEventListener('submit', function(e) {
  console.log(errores);
  if (errores = false) {
    this.submit();
  } else {
    e.preventDefault();
  }

});

});//cierre ventana
