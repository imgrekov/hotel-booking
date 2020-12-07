window.addEventListener('DOMContentLoaded', event => {
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

    preloadImages: false,
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

  const burgerBtn = document.querySelector('.burger')
  burgerBtn.addEventListener('click', () => {
    document.querySelector('.header__nav').classList.toggle('header__nav--active')
    document.querySelector('body').classList.toggle('overflow--hidden')
  })

  const modalButtons = document.querySelectorAll('[data-target=modal]')
  modalButtons.forEach(target => {
    target.addEventListener('click', modalOpen)
  })

  document.querySelector('.modal-dialog__close').addEventListener('click', modalClose)
  document.querySelector('.modal__overlay').addEventListener('click', modalClose)

  document.addEventListener('keyup', e => {
    if (e.code === 'Escape') modalClose()
  })

  function modalOpen() {
    document.querySelector('.modal__overlay').classList.add('modal__overlay--active')
    document.querySelector('.modal-dialog').classList.add('modal-dialog--active')
    document.querySelector('body').classList.add('overflow--hidden')
  }
  function modalClose() {
    document.querySelector('.modal__overlay').classList.remove('modal__overlay--active')
    document.querySelector('.modal-dialog').classList.remove('modal-dialog--active')
    document.querySelector('body').classList.remove('overflow--hidden')
  }

  new Bouncer('form')

  document.querySelectorAll('input[type=tel]').forEach(input => new IMask(input, { mask: '+{1} (000) 000-00-00' }))
})
