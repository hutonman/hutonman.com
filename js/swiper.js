const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  // loop: true,
  effect: "coverflow",
  slidesPerView: 3,
  centeredSlides: true,
  autoHeight: true,
  slidesPerGroup: 1,
  autoplay: {
    delay: 100000,
    disableOnInteraction: false,
  },
});