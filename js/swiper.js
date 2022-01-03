const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  // loop: true,
  effect: "coverflow",
  slidesPerView: 1,
  centeredSlides: true,
  autoHeight: true,
  slidesPerGroup: 1,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
});