document.addEventListener("DOMContentLoaded", () => {

    if (window.innerWidth > 991) return;

    const toggle = document.querySelector(".services-toggle");
    const menu = document.querySelector(".mega-menu");
    const arrow = document.querySelector(".arrow");

    if (!toggle || !menu) return;

    toggle.addEventListener("click", function (e) {

        e.preventDefault();

        menu.classList.toggle("active");

        arrow.classList.toggle("rotate");

    });

});