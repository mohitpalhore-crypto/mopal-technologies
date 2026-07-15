const menu = document.querySelector(".nav-menu");
const button = document.querySelector(".menu-toggle");

if(button && menu){

    button.addEventListener("click",()=>{

        menu.classList.toggle("active");

        button.innerHTML = menu.classList.contains("active")

        ? "✕"

        : "☰";

    });

}