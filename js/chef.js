const divChefs = document.querySelectorAll("#div-chef");
const overlay = document.querySelectorAll("#overlay-chef");

divChefs[0].addEventListener("mouseover", () =>{ overlay[0].style.opacity = "1"; });
divChefs[0].addEventListener("mouseleave", () =>{ overlay[0].style.opacity = "0"; });

divChefs[1].addEventListener("mouseover", () =>{ overlay[1].style.opacity = "1"; });
divChefs[1].addEventListener("mouseleave", () =>{ overlay[1].style.opacity = "0"; });

divChefs[2].addEventListener("mouseover", () =>{ overlay[2].style.opacity = "1"; });
divChefs[2].addEventListener("mouseleave", () =>{ overlay[2].style.opacity = "0"; });