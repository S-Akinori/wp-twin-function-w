import $ from './jquery'
// import Swiper JS
import Swiper, {Navigation, Pagination, Autoplay, EffectFade} from 'swiper';
// import Swiper styles
import 'swiper/css';
import "swiper/css/effect-fade";
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { fadeIn } from './modules/fadeIn';
import { slideShow } from './modules/slideshow';
import { smoothScroll } from './modules/smoothScroll';

$(function() {
  fadeIn()
  // slideShow()
  smoothScroll()
  const fvSwiper = new Swiper('.fv-swiper', {
    effect: "fade",
    fadeEffect: {crossFade: true},
    modules: [EffectFade,Autoplay],
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
  const swiper = new Swiper('.swiper', {
    spaceBetween: 30,
    slidesPerView: 2,
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
})