document.addEventListener("DOMContentLoaded", ()=> {

  const burger     = document.querySelector(".burger");
  const burgerBar1 = document.querySelector(".burger__bar1");
  const burgerBar2 = document.querySelector(".burger__bar2");
  const menu       = document.querySelector(".nav__menu");
  const navLinks   = document.querySelectorAll(".nav__link");
  burger.addEventListener("click", ()=> {
    burgerBar1.classList.toggle("burger__bar--active");
    burgerBar2.classList.toggle("burger__bar--active");
    menu.classList.toggle("nav__menu--active");
    navLinks.forEach((navLink)=>{
      navLink.classList.toggle("nav__link--active");
    });
  });

  const dropdown     = document.querySelector(".dropdown");
  const dropdownMenu = document.querySelector(".dropdown__menu");
  dropdown.addEventListener("click", ()=> {
    dropdownMenu.classList.toggle("dropdown__menu--active");
  });

  const btnForm = document.getElementById("btn-form");

  btnForm.addEventListener("click", ()=> {

    let errores  = [];
    let habitacion;
    if(document.getElementById("habitacion-st").checked) {
      habitacion = document.getElementById("habitacion-st").value;
    } else if(document.getElementById("habitacion-dc").checked) {
      habitacion = document.getElementById("habitacion-dc").value;
    } else if(document.getElementById("habitacion-fd").checked) {
      habitacion = document.getElementById("habitacion-fd").value;
    }
    let nombre   = document.getElementById("nombre-txt").value.trim();
    let correo   = document.getElementById("correo-txt").value.trim();
    let telefono = document.getElementById("telefono-num").value.trim();
    let entidad  = document.getElementById("entidad-sel").value;
    let mensaje  = document.getElementById("mensaje-txt").value;
    if(habitacion === undefined) {
      errores.push("Debes seleccionar una habitación");
    }
    if(nombre === "") {
      errores.push("Debes ingresar un nombre");
    }
    if(correo === "") {
      errores.push("Debes ingresar un correo");
    }
    if(isNaN(telefono)) {
      errores.push("El telefono sólo debe contener números");
    }
    if(mensaje === "") {
      errores.push("Debe ingresar un mensaje");
    }
    if(errores.length === 0) {
      Swal.fire({
        icon : 'success',
        title : '<h2 class="h2">Sus datos han sido enviados con éxito</h2>',
        html : '<p class="p-sec">Ya puede cerrar esta ventana</p>',
        confirmButtonText : 'Genial!',
        confirmButtonColor : '#d25200'
      });
    } else {
      Swal.fire({
        icon : 'error',
        title : '<h2 class="h2">Se hallaron algunos errores</h2>',
        html : '<p class="p-sec">'+errores.join(" - ")+'</p>',
        confirmButtonText : 'Entendido',
        confirmButtonColor : '#d25200'
      });
    }
  });
});
