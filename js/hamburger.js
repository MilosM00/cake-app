const hamburgerButton = document.querySelector("#hamburger-button");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerLi = document.querySelectorAll(".hamburger-li");
const navImage = document.querySelector("#nav-image");

let hamburger = true;

const openMenu = () =>{
    hamburgerButton.classList.remove("fa-bars");
    hamburgerButton.classList.add("fa-times");
    hamburgerMenu.style.display = "flex";
    hamburger = false;
};

const closeMenu = () =>{
    hamburgerButton.classList.add("fa-bars");
    hamburgerButton.classList.remove("fa-times");
    hamburgerMenu.style.display = "none";
    hamburger = true;
};

hamburgerButton.addEventListener("click", () =>{
    if(hamburger === true){ openMenu(); }
    else{ closeMenu(); }
});

hamburgerLi[0].addEventListener("click", () =>{ closeMenu(); });
hamburgerLi[1].addEventListener("click", () =>{ closeMenu(); });
hamburgerLi[2].addEventListener("click", () =>{ closeMenu(); });
hamburgerLi[3].addEventListener("click", () =>{ closeMenu(); });
hamburgerLi[4].addEventListener("click", () =>{ closeMenu(); });
navImage.addEventListener("click", () =>{ closeMenu(); });