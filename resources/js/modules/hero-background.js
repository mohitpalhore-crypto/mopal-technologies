document.addEventListener("DOMContentLoaded", () => {

    const hero = document.querySelector(".hero");

    if (!hero) return;

    const auroras = document.querySelectorAll(".aurora");
    const blobs = document.querySelectorAll(".blob");

    /* ==========================================
       MOUSE PARALLAX
    ========================================== */

    hero.addEventListener("mousemove", (e) => {

        const rect = hero.getBoundingClientRect();

        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;

        auroras.forEach((item, index) => {

            const speed = (index + 1) * 18;

            item.style.transform =
                `translate(${x * speed}px, ${y * speed}px)`;

        });

        blobs.forEach((item, index) => {

            const speed = (index + 1) * 12;

            item.style.transform =
                `translate(${x * speed}px, ${y * speed}px)`;

        });

    });

    /* ==========================================
       RESET POSITION
    ========================================== */

    hero.addEventListener("mouseleave", () => {

        auroras.forEach(item => {

            item.style.transform = "translate(0,0)";

        });

        blobs.forEach(item => {

            item.style.transform = "translate(0,0)";

        });

    });

    /* ==========================================
       SCROLL PARALLAX
    ========================================== */

    window.addEventListener("scroll", () => {

        const scroll = window.scrollY;

        auroras.forEach((item, index) => {

            item.style.transform += ` translateY(${scroll * (0.015 * (index + 1))}px)`;

        });

    });

});