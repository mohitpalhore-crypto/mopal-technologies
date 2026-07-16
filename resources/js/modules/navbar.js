document.addEventListener("DOMContentLoaded", () => {

    const menu = document.querySelector(".nav-menu");
    const button = document.querySelector(".menu-toggle");

    console.log(menu);
    console.log(button);

    if (!menu || !button) return;

    button.addEventListener("click", () => {

        menu.classList.toggle("active");

        button.innerHTML = menu.classList.contains("active")
            ? "✕"
            : "☰";

    });

    document.querySelectorAll(".nav-menu a").forEach(link => {

        link.addEventListener("click", () => {

            menu.classList.remove("active");

            button.innerHTML = "☰";

        });

    });

});