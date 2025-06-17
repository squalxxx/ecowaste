import Swiper from "swiper";
import { Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const swiperOffers = new Swiper(".offers-slider", {
    modules: [Navigation],

    speed: 400,
    spaceBetween: 0,
    slidesPerView: 1,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiperCustomerLogos = new Swiper(".customer-logos__slider .swiper", {
    speed: 400,
    spaceBetween: 42,
    slidesPerView: 6,
    autoplay: {
        delay: 5000,
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 6,
        },
    },
});

const swiperReviews = new Swiper(".reviews__slider", {
    modules: [Navigation],

    speed: 400,
    spaceBetween: 22,
    slidesPerView: 4,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 22,
        },
    },
});
