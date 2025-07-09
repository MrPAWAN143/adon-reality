import './bootstrap';
import '../../public/assets/css/homepage.css';
import '../../public/assets/css/faq.css';
import '../../public/assets/css/master.css';



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
                    slidesToShow: 3
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