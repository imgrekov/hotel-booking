const hotelSlider = new Swiper('.hotel-slider', {
  loop: true,

  navigation: {
    nextEl: '.hotel-slider__nav--next',
    prevEl: '.hotel-slider__nav--prev',
  },

  spaceBetween: 10,
})
