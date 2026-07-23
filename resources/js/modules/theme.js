function setTheme(theme){

    document.documentElement.setAttribute("data-theme",theme);

    localStorage.setItem("theme",theme);

    updateButtons(theme);

}

function updateButtons(theme){

    const desktop=document.getElementById("theme-toggle");

    const mobile=document.getElementById("theme-toggle-mobile");

    if(desktop){

        desktop.innerHTML=theme==="dark"?"🌙":"☀️";

    }

    if(mobile){

        mobile.innerHTML=theme==="dark"

        ?"🌙 Dark Mode"

        :"☀️ Light Mode";

    }

}

document.addEventListener("DOMContentLoaded",()=>{

    const saved=localStorage.getItem("theme")||"dark";

    setTheme(saved);

    document.getElementById("theme-toggle")?.addEventListener("click",()=>{

        const next=document.documentElement.getAttribute("data-theme")==="dark"

        ?"light"

        :"dark";

        setTheme(next);

    });

    document.getElementById("theme-toggle-mobile")?.addEventListener("click",()=>{

        const next=document.documentElement.getAttribute("data-theme")==="dark"

        ?"light"

        :"dark";

        setTheme(next);

    });

});