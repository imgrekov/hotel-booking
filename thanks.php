<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Best Tour Plan — Hotel Booking</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <script src="https://api-maps.yandex.ru/2.1/?apikey=cea83dff-e384-4956-a843-e916fbcf61a9&lang=ru_RU"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
  <div class="page">
    <header class="header">
      <div class="container">
        <div class="header-top">
          <a href="https://imgrekov.ru/projects/hotel-booking/" class="logo header__logo">
            <img class="logo__image" src="./images/logo-horizontal.svg" alt="Logo: Best Tour Plan" />
          </a>
          <!-- /.header__logo logo -->
          <form class="search header__search header__search--mobile-hidden" action="#">
            <input type="text" class="search__input" placeholder="Search Location" />
            <!-- /.search__label -->
            <button class="button search__button">
              <img src="./images/search.svg" alt="Icon: search" />
            </button>
            <!-- /.button search__button -->
          </form>
          <!-- /.header__search search -->
          <a href="#!" class="user header__user header__user--mobile-hidden">
            <img src="./images/user-avatar.jpg" alt="Photo: user" class="user__avatar" />
            <h3 class="user__name">Nathan</h3>
            <!-- /.user__name -->
          </a>
          <!-- /.header__user user -->
          <button class="burger header-top__burger">
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
          </button>
          <!-- /.header-top__burger burger -->
        </div>
        <!-- /.header-top -->
      </div>
      <!-- /.container -->
      <nav class="nav header__nav">
        <div class="container">
          <ul class="nav__list">
            <li class="nav__item nav__item--mobile-visible nav__item--mobile-mb-3">
              <a href="#!" class="user header__user header__user--mobile">
                <img src="./images/user-avatar.jpg" alt="Photo: user" class="user__avatar" />
                <h3 class="user__name user__name--mobile">Nathan</h3>
                <!-- /.user__name -->
              </a>
              <!-- /.header__user user -->
            </li>
            <!-- /.nav__item nav__item--mobile-visible -->
            <li class="nav__item nav__item--mobile-visible nav__item--mobile-mb-4">
              <form class="search header__search" action="#">
                <input type="text" class="search__input search__input--mobile-wide" placeholder="Search Location" />
                <!-- /.search__label -->
                <button class="button search__button">
                  <img src="./images/search.svg" alt="Icon: search" />
                </button>
                <!-- /.button search__button -->
              </form>
              <!-- /.header__search search -->
            </li>
            <!-- /.nav__item nav__item--mobile-visible -->
            <li class="nav__item">
              <a href="#!" class="nav__link">All Deals</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Hotels</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Activities</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Hotel Day Packages</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Restaurants</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Events</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
            <li class="nav__item">
              <a href="#!" class="nav__link">Rodrigues</a>
              <!-- /.nav__link -->
            </li>
            <!-- /.nav__item -->
          </ul>
          <!-- /.nav__list -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.header-nav nav -->
    </header>
    <!-- /.header -->
    <main class="main">
      <nav class="breadcrumb">
        <div class="container">
          <ul class="breadcrumb-list">
            <li class="breadcrumb-list__item">
              <a href="#!" class="breadcrumb-list__link">Home</a>
              <!-- /.breadcrumb-list__link -->
            </li>
            <!-- /.breadcrumb-list__item -->
            <li class="breadcrumb-list__item">
              <a href="#!" class="breadcrumb-list__link">Flash Offers</a>
              <!-- /.breadcrumb-list__link -->
            </li>
            <!-- /.breadcrumb-list__item -->
            <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
            <!-- /.breadcrumb-list__item -->
          </ul>
          <!-- /.breadcrumb-list -->
        </div>
      </nav>
      <!-- /.breadcrumb -->
      <section class="hotel">
        <div class="container">
          <div class="hotel-info">
            <div class="hotel-info__wrapper">
              <h1 class="hotel-info__name">
                <?php
                $type = $_GET['t'];
                $heading = "Thanks for subscribing";

                if ($type == "callback") {
                  $heading = "Application sent";
                }

                echo $heading;
                ?>
              </h1>
              <!-- /.hotel-info__name -->
            </div>
            <!-- /.hotel-info__wrapper -->
            <div class="hotel-info__descr">
              <?php
              $type = $_GET['t'];

              if ($type == "callback") {
                $text = "Manager will contact you in 20 minutes";
                echo $text;
              }

              ?>
            </div>
            <!-- /.hotel-info__descr -->
            <a href="https://imgrekov.ru/projects/hotel-booking/" class="button button-thx">Back home</a> <!-- /.button -->
          </div>
          <!-- /.hotel-info -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.hotel -->
    </main>
    <!-- /.main -->
    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <img src="./images/footer/logo-vertical.svg" alt="Logo" class="footer__logo" />
          <div class="footer__block footer__categories">
            <h3 class="footer__title">All categories</h3>
            <!-- /.footer__title -->
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">All Deals</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Hotels</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Activities</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Spa Packages</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Hotel Day Packages</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Restaurants</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Fitness</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Rodrigues</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- /.footer__block -->
          <div class="footer__block footer__additional">
            <h3 class="footer__title">Additional information</h3>
            <!-- /.footer__title -->
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">About Us</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Contact Us</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">How does it work?</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Frequently Asked Questions</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Deals.mu loyalty program</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Promote your Business on BTP</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- /.footer__block -->
          <div class="footer__block footer__legal">
            <h3 class="footer__title">Legal information</h3>
            <!-- /.footer__title -->
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">Terms & Conditions</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Disclaimer</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Cancellation policy</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item">
                <a href="#!" class="footer__link">Privacy</a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- /.footer__block -->
          <div class="footer__block footer__socials">
            <h3 class="footer__title">Social Network</h3>
            <!-- /.footer__title -->
            <ul class="footer-links">
              <li class="footer-links__item">
                <a href="#!" class="footer-links__link footer__link--svg">
                  <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.001.002C4.479.002.002 4.479.002 10.001c0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V7.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C16.344 19.129 20 14.992 20 10.001 20 4.479 15.523.002 10.001.002z" />
                  </svg>
                </a>
                <!-- /.footer-links__link footer-links__link--svg -->
              </li>
              <!-- /.footer-links__item -->
              <li class="footer-links__item">
                <a href="#!" class="footer-links__link footer__link--svg">
                  <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.183 10.325l-2.358-1.1c-.206-.096-.375.01-.375.239v2.072c0 .228.169.335.375.24l2.357-1.1c.207-.097.207-.255.001-.351zM10.5.42C4.933.42.42 4.933.42 10.5S4.933 20.58 10.5 20.58s10.08-4.513 10.08-10.08S16.067.42 10.5.42zm0 14.175c-5.16 0-5.25-.465-5.25-4.095s.09-4.095 5.25-4.095 5.25.465 5.25 4.095-.09 4.095-5.25 4.095z" />
                  </svg>
                </a>
                <!-- /.footer-links__link footer-links__link--svg -->
              </li>
              <!-- /.footer-links__item -->
              <li class="footer-links__item">
                <a href="#!" class="footer-links__link footer__link--svg">
                  <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20a9.811 9.811 0 01-3.887-.791c-1.237-.527-2.301-1.237-3.193-2.129-.892-.892-1.602-1.956-2.129-3.193A9.81 9.81 0 010 10c0-1.354.264-2.65.791-3.887S2.028 3.812 2.92 2.92C3.812 2.028 4.876 1.318 6.113.79A9.81 9.81 0 0110 0a9.81 9.81 0 013.887.791c1.237.527 2.301 1.237 3.193 2.129.892.892 1.602 1.956 2.129 3.193A9.811 9.811 0 0120 10c0 1.354-.264 2.65-.791 3.887s-1.237 2.301-2.129 3.193c-.892.892-1.956 1.602-3.193 2.129A9.811 9.811 0 0110 20zm5-13.75c0-.339-.12-.632-.361-.879A1.192 1.192 0 0013.75 5h-7.5c-.339 0-.632.124-.879.371S5 5.911 5 6.25V7.5h2.227c.755-.833 1.68-1.25 2.773-1.25 1.094 0 2.018.417 2.773 1.25H15V6.25zM7.5 10c0 .69.244 1.28.732 1.768A2.409 2.409 0 0010 12.5c.69 0 1.28-.244 1.768-.732A2.409 2.409 0 0012.5 10c0-.69-.244-1.28-.732-1.768A2.409 2.409 0 0010 7.5c-.69 0-1.28.244-1.768.732A2.409 2.409 0 007.5 10zM15 8.75h-1.484c.156.43.234.846.234 1.25 0 1.042-.365 1.927-1.094 2.656-.729.73-1.614 1.094-2.656 1.094s-1.927-.365-2.656-1.094C6.614 11.927 6.25 11.042 6.25 10c0-.404.078-.82.234-1.25H5v5c0 .352.12.648.361.889.241.24.537.361.889.361h7.5c.352 0 .648-.12.889-.361.24-.241.361-.537.361-.889v-5z" />
                  </svg>
                </a>
                <!-- /.footer-links__link footer-links__link--svg -->
              </li>
              <!-- /.footer-links__item -->
            </ul>
            <!-- /.footer-links -->
          </div>
          <!-- /.footer__block -->
          <div class="footer__block footer__contacts">
            <h3 class="footer__title footer__title--mb">Contact Details</h3>
            <!-- /.footer__title -->
            <p class="footer__sub-title">Feel free to contact us by phone, email or by our contact form</p>
            <!-- /.footer__sub-title -->
            <ul class="footer__list">
              <li class="footer__item footer__item-contacts">
                <a href="#!" class="footer__link footer__link-contacts footer__link--flex footer__link--svg">
                  <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 0C3.13 0 0 3.13 0 7c0 4.17 4.42 9.92 6.24 12.11.4.48 1.13.48 1.53 0C9.58 16.92 14 11.17 14 7c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                  </svg>
                  9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
                </a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
              <li class="footer__item footer__item-contacts footer__link-contacts footer__link--flex footer__link--svg">
                <svg xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.167 9.54h1.916c0-4.915-3.711-8.623-8.634-8.623v1.916c3.893 0 6.718 2.82 6.718 6.708z" />
                  <path d="M10.458 6.667c2.016 0 2.875.86 2.875 2.875h1.917c0-3.09-1.701-4.792-4.792-4.792v1.917zm3.28 5.216a.96.96 0 00-1.333.041l-2.294 2.359c-.552-.106-1.661-.452-2.804-1.591-1.142-1.143-1.488-2.256-1.59-2.804l2.356-2.295a.958.958 0 00.041-1.333l-3.54-3.893a.958.958 0 00-1.334-.084L1.16 4.067a.958.958 0 00-.277.622c-.015.24-.289 5.915 4.112 10.317 3.839 3.838 8.648 4.12 9.972 4.12.194 0 .313-.007.344-.009a.95.95 0 00.621-.279l1.783-2.08a.958.958 0 00-.083-1.333l-3.894-3.542z" />
                </svg>
                <div>
                  <a href="tel:2691500" class="footer__link">Tel (business hours) : 269 1500</a>
                  <!-- /.footer__link -->
                  <a href="tel:52566138" class="footer__link">
                    Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm)
                  </a>
                  <!-- /.footer__link -->
                  <a href="tel:52566138" class="footer__link">
                    Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
                  </a>
                  <!-- /.footer__link -->
                </div>
              </li>
              <!-- /.footer__item -->
              <li class="footer__item footer__item-contacts">
                <a href="mailto:cherly.lawson@example.com" class="footer__link footer__link-contacts footer__link--flex footer__link--svg">
                  <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.667.333H2.333C1.417.333.675 1.083.675 2L.667 12c0 .917.75 1.667 1.666 1.667h13.334c.916 0 1.666-.75 1.666-1.667V2c0-.917-.75-1.667-1.666-1.667zm-.334 3.542L9.442 7.558a.843.843 0 01-.884 0L2.667 3.875a.708.708 0 11.75-1.2L9 6.167l5.583-3.492a.708.708 0 11.75 1.2z" />
                  </svg>
                  cherly.lawson@example.com
                </a>
                <!-- /.footer__link -->
              </li>
              <!-- /.footer__item -->
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- /.footer__block -->
          <div class="footer__block footer__form">
            <h3 class="footer__title footer__title--mb">Send us a message</h3>
            <!-- /.footer__title -->
            <form action="send.php" method="POST" class="footer-form">
              <input type="text" class="footer-form__input" name="name" placeholder="Your Full Name*" required />
              <input type="text" class="footer-form__input" name="phone" placeholder="Phone Number*" required />
              <textarea name="message" id="message" class="footer-form__textarea" placeholder="Message"></textarea>
              <button type="submit" class="footer-form__button button">Send</button>
              <strong class="footer-form__text">* Required Fields</strong>
            </form>
            <!-- /.footer-form -->
          </div>
          <!-- /.footer__block -->
        </div>
        <!-- /.footer-wrapper -->
        <div class="footer-bottom">
          <ul class="footer-links footer__links">
            <li class="footer-links__item">
              <a href="#!" class="footer-links__link">Disclaimer</a>
              <!-- /.footer-links__link -->
            </li>
            <!-- /.footer-links__item -->
            <li class="footer-links__item">
              <a href="#!" class="footer-links__link">Conditions of use</a>
              <!-- /.footer-links__link -->
            </li>
            <!-- /.footer-links__item -->
            <li class="footer-links__item">
              <a href="#!" class="footer-links__link">Cancellation policy</a>
              <!-- /.footer-links__link -->
            </li>
            <!-- /.footer-links__item -->
          </ul>
          <!-- /.footer-links -->
          <div class="footer-pay-type">
            <img src="./images/footer/footer-pay-type.png" alt="Photo: payments" class="footer-pay-type__image" />
          </div>
          <!-- /.footer-pay-type -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
  </div>
  <!-- /.page -->
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/motus.web.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>