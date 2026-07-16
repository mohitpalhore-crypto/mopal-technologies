import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import '../css/app.css';

import './modules/navbar';
import './modules/theme';
import './modules/hero';
import './modules/portfolio';

AOS.init({
    duration: 1000,
    once: true,
    offset: 120,
});