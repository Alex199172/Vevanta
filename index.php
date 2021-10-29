<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Загородная недвижимость</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <header>
    <div class="container mt-3 mb-3">
      <div class="row">

        <div class="row align-items-center d-block d-md-none d-flex justify-content: space-between">
            <div class="col">
              <a href="" class="header__link">
                <img class="header__logo" src="assets/img/logo2.png" alt="logo">
              </a>
            </div>


        <div class="col text-end pe-0">
          <a href="tel:+73452396571" class="header__link">
            <img class="header__logo-call" src="assets/img/call.png" alt="logo">
          </a>

          <button class="bg-white" type="button" data-bs-toggle="offcanvas"
           data-bs-target="#offcanvasRight"
           aria-controls="offcanvasRight">
             <img src="https://img.icons8.com/material-sharp/24/000000/menu--v1.png"/>
          </button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
          <button type="button" class="button__click btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
          <img class="mb-2" src="assets/img/logo.png" alt="logo">
        <h5 class="text-center" id="offcanvasRightLabel">
          Компания состоит в СРО
          г. Тюмень, ул. Червишевский тракт, д. 3, этаж 2
            <br><strong class="offer">+7 (3452) 39-65-71</strong>
        </h5>
      </div>
      <div class="offcanvas-body">
        <ul class="text-start">
          <li><a class="dropdown-item btn-5" href="#projects">Популярные проекты</a></li>
          <li><a class="dropdown-item" href="#objects">Недавние проекты</a></li>
          <li><a class="dropdown-item" href="#content">Этапы работ</a></li>
          <li><a class="dropdown-item" href="https://vevanta.com/uslugi">Услуги</a></li>
          <li><a class="dropdown-item" href="https://vevanta.com/tehnologii">Технологии</a></li>
          <li><a class="dropdown-item" href="https://vevanta.com/o-kompanii">О нас</a></li>
          <li><a class="dropdown-item" href="https://vevanta.com/kontakty">Контакты</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="tel:+73452396571">Заказать звонок</a></li>
        </ul>
      </div>
      <ul class="clients__items text-center">

        <li class="mt-2">
          <a href="https://mail.yandex.ru/u2709/?uid=184382912#inbox" class="clients__link">
              <i class="icon-email"></i>
              vevanta@yandex.ru<br>
              (Для клиентов)
          </a>
        </li>
        <li class="mt-2">
          <a href="https://mail.yandex.ru/u2709/?uid=184382912#inbox" class="clients__link">
              <i class="icon-email"></i>
              company@vevanta.com<br>
            (Коммерческие предложения)
          </a>
        </li>
      </ul>
      <ul class="d-flex justify-content-center">
        <li class="header__item p-0 me-2">
          <a href="https://www.youtube.com/channel/UCRytU0cHs-IZN0dsBZW6Shw" class="header__link">
            <i class="icon-you fs22 cl-dark-blue"></i>
          </a>
        </li>
        <li class="header__item p-0 me-2">
          <a href="https://www.instagram.com/vevanta72/?roistat_visit=941954" class="header__link">
            <i class="icon-inst fs22 cl-dark-blue"></i>
          </a>
        </li>
        <li class="header__item p-0 me-2">
          <a href="https://vk.com/stroitelstvo_domov_i_kottedjey?roistat_visit=941954" class="header__link">
            <i class="icon-vk fs22 cl-dark-blue"></i>
          </a>
        </li>
      </ul>

    </div>

        </div>
        </div>

        <div class="col d-none d-md-block">
          <a href="" class="header__link">
            <img class="header__logo" src="assets/img/logo.png" alt="logo">
          </a>
        </div>
        <div class="col-7 d-flex d-none d-xl-block">
          <div class="d-flex flex-column m-auto">
            <div class="row d-flex">
              <ul class="header__items mb-2 row d-flex align-items-center">
                <li class="header__item col-auto">
                  <i class="icon-phone"></i>
                  <a href="tel:+73452396571" class="header__link">
                    <strong>+7 (3452) 39-65-71</strong>
                  </a>
                </li>
                <li class="header__item col-auto">
                    <strong class="header__span">
                      Звоните с 09:00 до 20:00
                    </strong>
                  <li class="header__item col-auto p-0 me-2">
                    <a href="https://www.youtube.com/channel/UCRytU0cHs-IZN0dsBZW6Shw" class="header__link">
                      <i class="icon-you fs22 cl-dark-blue"></i>
                    </a>
                  </li>
                  <li class="header__item col-auto p-0 me-2">
                    <a href="https://www.instagram.com/vevanta72/?roistat_visit=941954" class="header__link">
                      <i class="icon-inst fs22 cl-dark-blue"></i>
                    </a>
                  </li>
                  <li class="header__item col-auto p-0">
                    <a href="https://vk.com/stroitelstvo_domov_i_kottedjey?roistat_visit=941954" class="header__link">
                      <i class="icon-vk fs22 cl-dark-blue"></i>
                    </a>
                  </li>
              </ul>
            </div>

            <div class="row d-flex">
              <ul class="header__items col-auto m-auto d-flex row ms-0 p-0">
                  <li class="header__item col-auto">
                    <a href="#projects" class="header__link">
                      Популярные
                    </a>
                  </li>
                  <li class="header__item col-auto">
                    <a href="#objects" class="header__link">
                      Недавние
                    </a>
                  </li>
                  <li class="header__item col-auto">
                    <a href="#content" class="header__link">
                      Этапы работ
                    </a>
                  </li>
                  <li class="header__item col-auto">
                    <a href="https://vevanta.com/uslugi" class="header__link">
                      Услуги
                    </a>
                  </li>
                  <li class="header__item col-auto">
                    <a href="https://vevanta.com/o-kompanii" class="header__link">
                      О нас
                    </a>
                  </li>
                  <li class="header__item col-auto">
                    <a href="https://vevanta.com/kontakty" class="header__link">
                      Контакты
                    </a>
                  </li>
                <ul>
            </div>
          </div>
        </div>
        <div class="col align-self-center d-flex justify-content-end">
          <button class="btn d-none d-md-block text-light p-2" data-bs-toggle="modal" data-bs-target="#staticBack">Заказать звонок</button>
        </div>
      </div>
    </div>
  </header>

    <?php include 'modules/bunner.php' ?>
    <?php include 'modules/button.php'?>
    <?php include 'modules/projects.php'?>
    <?php include 'modules/form.php'?>
    <?php include 'modules/advantages.php'?>
    <?php include 'modules/objects.php'?>
    <?php include 'modules/modal.php'?>
    <?php include 'modules/content.php'?>
    <?php include 'modules/footer.php'?>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        centeredSlides: true,
        spaceBetween: 15,
        loop: true,
        breakpoints: {
   // when window width is >= 320px
   320: {
     slidesPerView: 2,
     spaceBetween: 10,
     loop: true

   },
   // when window width is >= 480px
   480: {
     slidesPerView: 3,
     spaceBetween: 10,
     loop: true
   },
   // when window width is >= 640px
   640: {
     slidesPerView: 4,
     spaceBetween: 10,
     loop: true

   },

   1200: {
     slidesPerView: 6,
     spaceBetween: 10,
     loop: true

   }
 },

      pagination: {
          el: ".swiper-pagination",
          type: "fraction",

        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

  </script>
  <script src="/assets/js/index.js"></script>

</body>
</html>
