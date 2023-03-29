const cakeOne = document.querySelector(".cake-inline-one");
const cakeTwo = document.querySelector(".cake-inline-two");
const cakeThree = document.querySelector(".cake-inline-three");
const cakeButton = document.querySelectorAll(".cake-button");

cakeButton[0].addEventListener("click", () =>{
    cakeButton[0].style.backgroundColor = "#954535";
    cakeButton[0].style.color = "#fff";
    cakeButton[1].style.backgroundColor = "#fff";
    cakeButton[1].style.color = "#000";
    cakeButton[2].style.backgroundColor = "#fff";
    cakeButton[2].style.color = "#000";

    cakeOne.style.display = "grid";
    cakeTwo.style.display = "none";
    cakeThree.style.display = "none";
    
    setTimeout(() => {
        cakeOne.style.opacity = "1";
    }, 10);
    cakeTwo.style.opacity = "0";
    cakeThree.style.opacity = "0";
});

cakeButton[1].addEventListener("click", () =>{
    cakeButton[1].style.backgroundColor = "#954535";
    cakeButton[1].style.color = "#fff";
    cakeButton[0].style.backgroundColor = "#fff";
    cakeButton[0].style.color = "#000";
    cakeButton[2].style.backgroundColor = "#fff";
    cakeButton[2].style.color = "#000";

    cakeTwo.style.display = "grid";
    cakeOne.style.display = "none";
    cakeThree.style.display = "none";
    
    setTimeout(() => {
        cakeTwo.style.opacity = "1";
    }, 10);
    cakeOne.style.opacity = "0";
    cakeThree.style.opacity = "0";
});

cakeButton[2].addEventListener("click", () =>{
    cakeButton[2].style.backgroundColor = "#954535";
    cakeButton[2].style.color = "#fff";
    cakeButton[0].style.backgroundColor = "#fff";
    cakeButton[0].style.color = "#000";
    cakeButton[1].style.backgroundColor = "#fff";
    cakeButton[1].style.color = "#000";

    cakeThree.style.display = "grid";
    cakeOne.style.display = "none";
    cakeTwo.style.display = "none";
    
    setTimeout(() => {
        cakeThree.style.opacity = "1";
    }, 10);
    cakeOne.style.opacity = "0";
    cakeTwo.style.opacity = "0";
});