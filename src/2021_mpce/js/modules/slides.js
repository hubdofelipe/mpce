import { Swiper, Navigation, Pagination, Autoplay } from "swiper/dist/js/swiper.esm.js";

Swiper.use([Navigation, Pagination, Autoplay]);

export default () => {
    var swiper = new Swiper('.gallery-modal-slider', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });

    var testimonials = new Swiper('.testimonials__slider', {
      speed: 1500,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: '.testimonials__next',
        prevEl: '.testimonials__prev',
      },
  });
};
