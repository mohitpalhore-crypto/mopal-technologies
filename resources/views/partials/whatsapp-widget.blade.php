<!-- ==========================================
     MOPAL WHATSAPP WIDGET
========================================== -->

<!-- Floating Button -->
<button
    class="whatsapp-toggle"
    id="whatsappToggle"
    aria-label="Open WhatsApp">

    <i class="fa-brands fa-whatsapp"></i>

</button>

<!-- Chat Widget -->
<div class="whatsapp-widget" id="whatsappWidget">

    <!-- Header -->
    <div class="whatsapp-header">

        <div class="company-info">

            <img
                src="{{ asset('assets/images/logo/mopal_logo_0_1.png') }}"
                alt="Mopal Technologies">

            <div>

                <h4>Mopal Technologies</h4>

                <span>

                    <span class="status-dot"></span>

                    Online • Usually replies in 15 min

                </span>

            </div>

        </div>

        <button id="whatsappClose">

            <i class="fa-solid fa-xmark"></i>

        </button>

    </div>

    <!-- Body -->

    <div class="whatsapp-body">

        <div class="chat-message">

            👋 Hi! How can we help you today?

        </div>

        <p class="quick-title">

            Quick Services

        </p>

        <div class="quick-buttons">

            <button
                class="quick-reply"
                data-service="Website Development">

                🌐 Website Development

            </button>

            <button
                class="quick-reply"
                data-service="E-Commerce Development">

                🛒 E-Commerce

            </button>

            <button
                class="quick-reply"
                data-service="ERP Software">

                💼 ERP Software

            </button>

            <button
                class="quick-reply"
                data-service="Custom Software">

                ⚙ Custom Software

            </button>

            <button
                class="quick-reply"
                data-service="Mobile App Development">

                📱 Mobile Apps

            </button>

            <button
                class="quick-reply"
                data-service="Digital Marketing">

                📈 Digital Marketing

            </button>

            <button
                class="quick-reply"
                data-service="SEO Services">

                🔍 SEO Services

            </button>

            <button
                class="quick-reply"
                data-service="AI Solutions">

                🤖 AI Solutions

            </button>

        </div>

        <div class="user-message">

            Hi Mopal Technologies! 👋

            <br><br>

            I'd like to know more about your services.

        </div>

        <a
            href="https://wa.me/919876543210"
            target="_blank"
            class="whatsapp-btn">

            <i class="fa-brands fa-whatsapp"></i>

            Start WhatsApp Chat

            <i class="fa-solid fa-arrow-right"></i>

        </a>

        <p class="reply-time">

            ✓ We typically reply within 15 minutes.

        </p>

    </div>

</div>