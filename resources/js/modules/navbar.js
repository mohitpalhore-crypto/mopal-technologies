document.addEventListener("DOMContentLoaded", function() {

    const navbar = document.querySelector(".navbar-custom");
    const menu = document.getElementById("navbarMenu");
    const menuToggle = document.getElementById("menuToggle");
    const menuIcon = menuToggle ? menuToggle.querySelector("i") : null;
    const servicesBtn = document.getElementById("servicesToggle");
    const servicesDropdown = document.getElementById("servicesDropdown");
    const servicesArrow = document.getElementById("servicesArrow");

    // ==========================
    // MOBILE MENU TOGGLE
    // ==========================

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", function(e) {
            e.stopPropagation();
            
            menu.classList.toggle("active");

            if (menu.classList.contains("active")) {
                if (menuIcon) {
                    menuIcon.classList.remove("fa-bars");
                    menuIcon.classList.add("fa-xmark");
                }
                document.body.style.overflow = "hidden";
            } else {
                if (menuIcon) {
                    menuIcon.classList.remove("fa-xmark");
                    menuIcon.classList.add("fa-bars");
                }
                document.body.style.overflow = "";
                // Close services dropdown when menu closes
                if (servicesDropdown) {
                    servicesDropdown.classList.remove("active");
                }
                if (servicesArrow) {
                    servicesArrow.classList.remove("rotate");
                }
            }
        });
    }

    // ==========================
    // MOBILE SERVICES TOGGLE - FIXED
    // ==========================

    if (servicesBtn && servicesDropdown && servicesArrow) {
        
        // Remove any existing click listeners
        servicesBtn.removeEventListener('click', toggleServicesMobile);
        
        // Add click listener
        servicesBtn.addEventListener('click', toggleServicesMobile);
        
        // Also add touch support
        servicesBtn.addEventListener('touchstart', function(e) {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                toggleServicesMobile(e);
            }
        }, { passive: false });
    }

    function toggleServicesMobile(e) {
        if (window.innerWidth <= 991) {
            e.preventDefault();
            e.stopPropagation();
            
            servicesDropdown.classList.toggle("active");
            servicesArrow.classList.toggle("rotate");
            
            console.log("Services toggled:", servicesDropdown.classList.contains("active"));
        }
    }

    // Make function globally accessible for onclick
    window.toggleServices = function(e) {
        if (window.innerWidth <= 991) {
            e.preventDefault();
            e.stopPropagation();
            
            if (servicesDropdown && servicesArrow) {
                servicesDropdown.classList.toggle("active");
                servicesArrow.classList.toggle("rotate");
            }
        }
    };

    // ==========================
    // MENU AUTO CLOSE ON LINK CLICK
    // ==========================

    document.querySelectorAll(".nav-link, .service-link").forEach(function(link) {
        link.addEventListener("click", function() {
            if (window.innerWidth <= 991) {
                if (menu) {
                    menu.classList.remove("active");
                }
                if (servicesDropdown) {
                    servicesDropdown.classList.remove("active");
                }
                if (servicesArrow) {
                    servicesArrow.classList.remove("rotate");
                }
                if (menuIcon) {
                    menuIcon.classList.remove("fa-xmark");
                    menuIcon.classList.add("fa-bars");
                }
                document.body.style.overflow = "";
            }
        });
    });

    // ==========================
    // CLICK OUTSIDE TO CLOSE
    // ==========================

    document.addEventListener("click", function(e) {
        if (window.innerWidth > 991) return;

        if (menu && menuToggle && !menu.contains(e.target) && !menuToggle.contains(e.target)) {
            menu.classList.remove("active");
            if (menuIcon) {
                menuIcon.classList.remove("fa-xmark");
                menuIcon.classList.add("fa-bars");
            }
            document.body.style.overflow = "";
        }

        // Close services dropdown when clicking outside
        if (servicesBtn && servicesDropdown && 
            !servicesBtn.contains(e.target) && 
            !servicesDropdown.contains(e.target)) {
            servicesDropdown.classList.remove("active");
            if (servicesArrow) {
                servicesArrow.classList.remove("rotate");
            }
        }
    });

    // ==========================
    // NAVBAR SCROLL EFFECT
    // ==========================

    if (navbar) {
        window.addEventListener("scroll", function() {
            if (window.scrollY > 40) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    }

    // ==========================
    // RESIZE HANDLER
    // ==========================

    window.addEventListener("resize", function() {
        if (window.innerWidth > 991) {
            if (menu) {
                menu.classList.remove("active");
            }
            if (servicesDropdown) {
                servicesDropdown.classList.remove("active");
            }
            if (servicesArrow) {
                servicesArrow.classList.remove("rotate");
            }
            if (menuIcon) {
                menuIcon.classList.remove("fa-xmark");
                menuIcon.classList.add("fa-bars");
            }
            document.body.style.overflow = "";
        }
    });

});