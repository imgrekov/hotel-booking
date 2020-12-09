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

const hotelMap = document.querySelector('#hotel-map')

let isNeedToInitMap = true
initMap = () => {
  if (isNeedToInitMap) {
    isNeedToInitMap = false
    hotelMap.insertAdjacentHTML(
      'beforeend',
      `
        <iframe
          class="hotel-aside__iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4114.0230675412395!2d115.21825967082796!3d-8.825254917815757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63d7607350cf7576!2sHilton%20Bali%20Resort!5e1!3m2!1sru!2sru!4v1606236250046!5m2!1sru!2sru"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      `,
    )
  }
}

hotelMap.addEventListener('click', initMap)
hotelMap.addEventListener('mouseover', initMap)
hotelMap.addEventListener('touchstart', initMap)
hotelMap.addEventListener('touchmove', initMap)
