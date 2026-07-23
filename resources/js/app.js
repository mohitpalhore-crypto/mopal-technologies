import './bootstrap';

import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import AOS from 'aos';

import 'aos/dist/aos.css';

import '../css/app.css';

import './modules/navbar';

import './modules/theme';

import './modules/mega-menu';

import './modules/hero';

import './modules/portfolio';

import './modules/counter';

import './modules/testimonial-slider';

import './modules/footer';

AOS.init({

    duration:1000,

    once:true,

    offset:100

});