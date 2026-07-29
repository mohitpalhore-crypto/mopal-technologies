document.addEventListener("DOMContentLoaded", () => {

    const widget = document.getElementById("whatsappWidget");
    const toggle = document.getElementById("whatsappToggle");
    const close = document.getElementById("whatsappClose");

    if (!widget || !toggle) return;

    /* ==========================
       OPEN
    ========================== */

    toggle.addEventListener("click", () => {

        widget.classList.add("active");
        toggle.classList.add("hide");

    });

    /* ==========================
       CLOSE
    ========================== */

    if (close) {

        close.addEventListener("click", () => {

            widget.classList.remove("active");
            toggle.classList.remove("hide");

        });

    }

    /* ==========================
       CLICK OUTSIDE
    ========================== */

    document.addEventListener("click", (e) => {

        if (
            widget.classList.contains("active") &&
            !widget.contains(e.target) &&
            !toggle.contains(e.target)
        ) {

            widget.classList.remove("active");
            toggle.classList.remove("hide");

        }

    });

    /* ==========================
       ESC CLOSE
    ========================== */

    document.addEventListener("keydown", (e) => {

        if (e.key === "Escape") {

            widget.classList.remove("active");
            toggle.classList.remove("hide");

        }

    });

    /* ==========================
       AUTO OPEN (Only Once)
    ========================== */

    const opened = localStorage.getItem("mopalWhatsapp");

    if (!opened) {

        setTimeout(() => {

            widget.classList.add("active");
            toggle.classList.add("hide");

            localStorage.setItem("mopalWhatsapp", "true");

        }, 6000);

    }

    /* ==========================
       QUICK REPLY
    ========================== */

    const phone = "919876543210"; // <-- Apna WhatsApp Number

    document.querySelectorAll(".quick-reply").forEach(btn => {

        btn.addEventListener("click", function () {

            const service = this.dataset.service;

            const message =
`Hello Mopal Technologies 👋

I am interested in:

${service}

Can you please share more details?`;

            window.open(
                `https://wa.me/${phone}?text=${encodeURIComponent(message)}`,
                "_blank"
            );

        });

    });

    /* ==========================
       MAIN BUTTON
    ========================== */

    const whatsappBtn = document.querySelector(".whatsapp-btn");

    if (whatsappBtn) {

        whatsappBtn.addEventListener("click", function (e) {

            e.preventDefault();

            const message =
`Hello Mopal Technologies 👋

I would like to discuss my project.

Please contact me.`;

            window.open(
                `https://wa.me/${phone}?text=${encodeURIComponent(message)}`,
                "_blank"
            );

        });

    }

});