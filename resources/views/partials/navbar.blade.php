<nav class="navbar navbar-expand-lg navbar-custom fixed-top">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand logo" href="#hero">

            <img
                src="{{ asset('assets/images/logo/mopal_logo_0_1.png') }}"
                alt="Mopal Technologies"
                class="logo-img">

            <div class="logo-text">
                <span class="logo-m">M</span>opal
                <span class="logo-tech">Technologies</span>
            </div>

        </a>


        <!-- Navigation -->
        <div class="navbar-menu" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('/') }}#hero" class="nav-link active">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/') }}#about" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <span>About</span>
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item services-item">

                    <button
                        class="nav-link services-btn"
                        id="servicesToggle"
                        type="button"
                        onclick="toggleServices(event)">

                        <div class="d-flex align-items-center gap-2">

                            <i class="fa-solid fa-gears"></i>

                            <span>Services</span>

                        </div>

                        <i class="fa-solid fa-chevron-down services-arrow" id="servicesArrow"></i>

                    </button>

                    <div class="services-dropdown" id="servicesDropdown">

                        <a href="{{ url('/website-development') }}" class="service-link">
                            <i class="fa-solid fa-globe"></i>
                            Website Development
                        </a>

                        <a href="{{ url('/ecommerce-development') }}" class="service-link">
                            <i class="fa-solid fa-cart-shopping"></i>
                            E-Commerce
                        </a>

                        <a href="{{ url('/erp-software') }}" class="service-link">
                            <i class="fa-solid fa-building"></i>
                            ERP Software
                        </a>

                        <a href="{{ url('/custom-software') }}" class="service-link">
                            <i class="fa-solid fa-laptop-code"></i>
                            Custom Software
                        </a>

                    <a href="{{ url('/mobile-app-development') }}" class="service-link">

    <i class="fa-solid fa-mobile-screen-button"></i>

    Mobile Apps

</a>
                        <a href="{{ url('/digital-marketing') }}" class="service-link">

    <i class="fa-solid fa-bullhorn"></i>

    Digital Marketing

</a>
                     <a href="{{ url('/seo-services') }}" class="service-link">

    <i class="fa-solid fa-magnifying-glass-chart"></i>

    SEO Services

</a>
                        <a href="{{ url('/ui-ux-design') }}" class="service-link">

    <i class="fa-solid fa-pen-ruler"></i>

    UI / UX Design

</a>

<a href="{{ url('/ai-solutions') }}" class="service-link">

    <i class="fa-solid fa-robot"></i>

    AI Solutions

</a>
                    </div>

                </li>

                <li class="nav-item">
                    <a href="{{ url('/') }}#portfolio" class="nav-link">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Portfolio</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/') }}#testimonials" class="nav-link">
                        <i class="fa-solid fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/') }}#contact" class="nav-link">
                        <i class="fa-solid fa-phone"></i>
                        <span>Contact</span>
                    </a>
                </li>

            </ul>

        </div>

        
        <!-- Right Actions -->
        <div class="navbar-actions">

            <!-- Theme Toggle -->
            <button
                id="theme-toggle"
                class="theme-btn"
                aria-label="Toggle Theme">

                <i class="fa-solid fa-moon"></i>

            </button>

            <!-- Mobile Menu Button -->
            <button
                id="menuToggle"
                class="navbar-toggler"
                type="button"
                aria-label="Toggle Navigation">

                <i class="fa-solid fa-bars"></i>

            </button>

        </div>

    </div>

</nav>