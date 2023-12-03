//    <!--Alvaro Cedazo Gonzalez-->
function validarEmail(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
       if (email === 'profesor@cesurformacion.com' && password === '1234') {
         location.href = "pagina_profesor.php";
       } else if (email === 'alumno@cesurformacion.com' && password === '5678') {
        location.href="pagina_alumno.php"
       } else {
         alert('Usuario y/o contraseña incorrectos');
       }
    
}

function ScrollNav() {
  var nav = document.querySelector('.nav');
  window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
          nav.classList.add('scrollBlack');
      } else {
          nav.classList.remove('scrollBlack');
      }
  });
}