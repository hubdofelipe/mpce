import { Swiper, Navigation, Pagination } from "swiper/dist/js/swiper.esm.js";

Swiper.use([Navigation, Pagination]);

export default () => {
    var swiper = new Swiper('.gallery-modal-slider', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });
};
