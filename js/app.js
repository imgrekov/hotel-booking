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
    lazy: {
      loadPrevNext: true,
    },
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

  const hotelMap = document.querySelector('#hotel-map')

  let isNeedToLoadHotelMap = true
  initYandexMap = () => {
    if (isNeedToLoadHotelMap) {
      isNeedToLoadHotelMap = false
      hotelMap.insertAdjacentHTML(
        'beforeend',
        `
          <iframe
            class="hotel-aside__iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4114.0230675412395!2d115.21825967082796!3d-8.825254917815757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63d7607350cf7576!2sHilton%20Bali%20Resort!5e1!3m2!1sru!2sru!4v1606236250046!5m2!1sru!2sru"
            allowfullscreen="true"
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        `,
      )
    }
  }

  hotelMap.addEventListener('click', initYandexMap, { passive: true })
  hotelMap.addEventListener('touchmove', initYandexMap, { passive: true })
  hotelMap.addEventListener('touchstart', initYandexMap, { passive: true })
  hotelMap.addEventListener('mouseover', initYandexMap, { passive: true })

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

  document.querySelectorAll('input[type=tel]').forEach(input => new IMask(input, { mask: '+{1} 000 000-00-00' }))

  AOS.init()
})
