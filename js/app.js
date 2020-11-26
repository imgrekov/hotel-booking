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

  // Disable preloading of all images
  preloadImages: false,
  // Enable lazy loading
  lazy: true,
})

const reviewsSlider = new Swiper('.reviews-slider', {
  loop: true,

  autoHeight: true,

  navigation: {
    nextEl: '.reviews-wrapper__nav--next',
    prevEl: '.reviews-wrapper__nav--prev',
  },
  breakpoints: {
    320: {
      spaceBetween: 10,
    },
    768: {
      spaceBetween: 0,
    },
  },
})

let newAnimation = new Motus.Animation({
  $el: document.querySelector('.newsletter'),
  keyframes: [{ backgroundPositionY: 90 }, { backgroundPositionY: 20 }],
})
Motus.addAnimation(newAnimation)

ymaps.ready(init)
function init() {
  const hotelMap = new ymaps.Map('hotel-map', {
    center: [-8.825708188621496, 115.21862255745404],
    zoom: 16,
  })
  hotelMap.setType('yandex#hybrid')
}
