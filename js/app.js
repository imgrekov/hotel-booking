const hotelSlider = new Swiper('.hotel-slider', {
  spaceBetween: 10,
  loop: true,

  keyboard: {
    enabled: true,
  },

  navigation: {
    nextEl: '.hotel-slider__nav--next',
    prevEl: '.hotel-slider__nav--prev',
  },
})
