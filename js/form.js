const labelFirstName = document.querySelector("#label-first-name");
const labelLastName = document.querySelector("#label-last-name");
const labelPhoneNumber = document.querySelector("#label-phone-number");
const labelEmailAddress = document.querySelector("#label-email-address");
const labelStreetAddress = document.querySelector("#label-street-address");

const inputFirstName = document.querySelector("#input-first-name");
const inputLastName = document.querySelector("#input-last-name");
const inputPhoneNumber = document.querySelector("#input-phone-number");
const inputEmailAddress = document.querySelector("#input-email-address");
const inputStreetAddress = document.querySelector("#input-street-address");

const form = document.querySelector(".form");


form.addEventListener("submit", (e) =>{

    if(!inputFirstName.value.match(/^[A-Za-z]+$/) || inputFirstName.value.length < 3)
    {
        e.preventDefault();
        labelFirstName.style.color = "#FF2400";
        labelFirstName.textContent = "Please, enter a first name!";
        inputFirstName.value = "";
    }
    
    else
    {
        labelFirstName.style.color = "#fff";
        labelFirstName.textContent = "First Name ✔";
    }
    
    if(!inputLastName.value.match(/^[A-Za-z]+$/) || inputLastName.value.length < 3)
    {
        e.preventDefault();
        labelLastName.style.color = "#FF2400";
        labelLastName.textContent = "Please, enter a last name!";
        inputLastName.value = "";
    }

    else
    {
        labelLastName.style.color = "#fff";
        labelLastName.textContent = "Last Name ✔";
    }

    if(!String(inputEmailAddress.value).includes("@") || inputEmailAddress.value.length < 6)
    {
        e.preventDefault();
        labelEmailAddress.style.color = "#FF2400";
        labelEmailAddress.textContent = "Please, enter a email address!";
        inputEmailAddress.value = "";
    }

    else
    {
        labelEmailAddress.style.color = "#fff";
        labelEmailAddress.textContent = "Email Address ✔";
    }

    if(!inputPhoneNumber.value.match(/^[0-9]+$/) || inputPhoneNumber.value.length < 6)
    {
        e.preventDefault();
        labelPhoneNumber.style.color = "#FF2400";
        labelPhoneNumber.textContent = "Please, enter a phone number!";
        inputPhoneNumber.value = "";
    }

    else
    {
        labelPhoneNumber.style.color = "#fff";
        labelPhoneNumber.textContent = "Last Name ✔";
    }

    if(inputStreetAddress.value.length < 5)
    {
        e.preventDefault();
        labelStreetAddress.style.color = "#FF2400";
        labelStreetAddress.textContent = "Please, enter a street address!";
        inputStreetAddress.value = "";
    }

    else
    {
        labelStreetAddress.style.color = "#fff";
        labelStreetAddress.textContent = "Street Address ✔";
    }

});