const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  slidesPerView: "auto",
  centeredSlides: true,
  spaceBetween: 150,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
})