const toggle = document.getElementById("theme-toggle");

if(toggle){

    const html = document.documentElement;

    const savedTheme = localStorage.getItem("theme") || "dark";

    html.setAttribute("data-theme",savedTheme);

    toggle.textContent = savedTheme === "dark" ? "🌙" : "☀️";

    toggle.addEventListener("click",()=>{

        const current = html.getAttribute("data-theme");

        const next = current==="dark"

        ? "light"

        : "dark";

        html.setAttribute("data-theme",next);

        localStorage.setItem("theme",next);

        toggle.textContent = next==="dark"

        ? "🌙"

        : "☀️";

    });

}