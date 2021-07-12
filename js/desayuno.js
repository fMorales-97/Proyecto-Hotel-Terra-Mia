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
});
