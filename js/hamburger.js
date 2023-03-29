const hamburgerButton = document.querySelector("#hamburger-button");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerLi = document.querySelectorAll(".hamburger-li");
const navImage = document.querySelector("#nav-image");

let hamburger = true;

const openMenu = () =>{

    setTimeout(() => { hamburgerMenu.style.opacity = "1"; }, 10);
    hamburgerMenu.style.display = "flex";
    hamburgerButton.classList.remove("fa-bars");
    hamburgerButton.classList.add("fa-times");
    hamburger = false;
};

const closeMenu = () =>{

    setTimeout(() => { hamburgerMenu.style.display = "none"; }, 500);
    hamburgerMenu.style.opacity = "0";
    hamburgerButton.classList.add("fa-bars");
    hamburgerButton.classList.remove("fa-times");
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