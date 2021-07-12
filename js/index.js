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

  const cardServicio1 = document.getElementById("card-servicio-1");
  const cardServicio2 = document.getElementById("card-servicio-2");
  const cardServicio3 = document.getElementById("card-servicio-3");
  cardServicio1.addEventListener("click", ()=> {
    window.location.href="desayuno.php";
  });

  cardServicio2.addEventListener("click", ()=> {
    window.location.href="eventos.php";
  });

  cardServicio3.addEventListener("click", ()=> {
    window.location.href="bar.php";
  });

  new Splide('#splide-testimonios', {
    arrows     : false,
    autoplay   : true,
    easing     : "ease",
    gap        : "1em",
    interval   : 7500,
    perPage    : 3,
    perMove    : 1,
    pagination : false,
    speed      : 500,
    type       : "loop",
    breakpoints : {
      576 : {
        perPage : 1
      },
      768 : {
        perPage : 2
      }
    }
  }).mount();

  new Splide('#splide-marcas', {
    arrows     : false,
    autoplay   : true,
    easing     : "ease",
    gap        : "1em",
    interval   : 2500,
    perPage    : 4,
    perMove    : 2,
    pagination : false,
    speed      : 500,
    type       : "loop",
    breakpoints : {
      576 : {
        perPage : 2
      },
      768 : {
        perPage : 3
      }
    }
  }).mount();
});
