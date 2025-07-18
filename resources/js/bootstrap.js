import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import $ from 'jquery';
window.$ = window.jQuery = $;



import 'slick-slider';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel/slick/slick.js';
import 'slick-carousel';


// Swiper core and modules
import Swiper from 'swiper';
import 'swiper/css';               // Base styles
import 'swiper/css/navigation';    // Navigation arrows
import 'swiper/css/pagination';    // Pagination dots

// Optional: Make globally available
window.Swiper = Swiper;
