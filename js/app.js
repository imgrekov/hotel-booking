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

// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
ymaps.ready(init)
function init() {
  const hotelMap = new ymaps.Map('hotel-map', {
    center: [-8.825708188621496, 115.21862255745404],
    zoom: 16,
  })
  hotelMap.setType('yandex#hybrid')
}
