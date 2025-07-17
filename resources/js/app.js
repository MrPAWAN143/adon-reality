import './bootstrap';
import '../css/homepage.css';
import '../css/faq.css';
import '../css/master.css';
import '../css/mobile.css';



import Alpine from 'alpinejs';



window.Alpine = Alpine;

Alpine.start();




$(document).ready(function () {
    $('.testimonial-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


});