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

  let habitacion1Splide = new Splide("#habitacion-1-splide", {
    cover       : true,
    heightRatio : 0.5,
    pagination  : false,
    rewind      : true,
    type        : "fade",
    breakpoints : {
      576 : {
        heightRatio : 1
      },
      768 : {
        heightRatio : 0.75
      }
    }
  });

  let habitacion1SplideSec = new Splide("#habitacion-1-splide-sec", {
    arrows       : false,
    cover        : true,
    focus        : "center",
    gap          : "1rem",
    height       : 140,
    pagination   : false,
    perPage      : 2,
    perMove      : 1,
    rewind       : true,
    breakpoints  : {
      768 : {
        height : 80
      }
    }
  }).mount();

  habitacion1Splide.sync(habitacion1SplideSec).mount();

  let habitacion2Splide = new Splide("#habitacion-2-splide", {
    cover       : true,
    heightRatio : 0.5,
    pagination  : false,
    rewind      : true,
    type        : "fade",
    breakpoints : {
      576 : {
        heightRatio : 1
      },
      768 : {
        heightRatio : 0.75
      }
    }
  });

  let habitacion2SplideSec = new Splide("#habitacion-2-splide-sec", {
    arrows       : false,
    cover        : true,
    focus        : "center",
    gap          : "1rem",
    height       : 140,
    pagination   : false,
    perPage      : 2,
    perMove      : 1,
    rewind       : true,
    breakpoints  : {
      768 : {
        height : 80
      }
    }
  }).mount();

  habitacion2Splide.sync(habitacion2SplideSec).mount();

  let habitacion3Splide = new Splide("#habitacion-3-splide", {
    cover       : true,
    heightRatio : 0.5,
    pagination  : false,
    rewind      : true,
    type        : "fade",
    breakpoints : {
      576 : {
        heightRatio : 1
      },
      768 : {
        heightRatio : 0.75
      }
    }
  });

  let habitacion3SplideSec = new Splide("#habitacion-3-splide-sec", {
    arrows       : false,
    cover        : true,
    focus        : "center",
    gap          : "1rem",
    height       : 140,
    pagination   : false,
    perPage      : 2,
    perMove      : 1,
    rewind       : true,
    breakpoints  : {
      768 : {
        height : 80
      }
    }
  }).mount();

  habitacion3Splide.sync(habitacion3SplideSec).mount();
});
