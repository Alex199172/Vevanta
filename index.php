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
      <div class="col">
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
                <a href="" class="header__link">
                  <strong>+7 (3452) 39-65-71</strong>
                </a>
              </li>
              <li class="header__item col-auto">
                <a href="" class="header__link">
                  <strong class="header__span">
                    Звоните с 09:00 до 20:00
                  </strong>
                </a>
                <li class="header__item col-auto p-0 me-2">
                  <a href="" class="header__link">
                    <i class="icon-you fs22 cl-dark-blue"></i>
                  </a>
                </li>
                <li class="header__item col-auto p-0 me-2">
                  <a href="" class="header__link">
                    <i class="icon-inst fs22 cl-dark-blue"></i>
                  </a>
                </li>
                <li class="header__item col-auto p-0">
                  <a href="" class="header__link">
                    <i class="icon-vk fs22 cl-dark-blue"></i>
                  </a>
                </li>
            </ul>
          </div>

          <div class="row d-flex">
            <ul class="header__items col-auto m-auto d-flex row p-0">
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    Проекты
                  </a>
                </li>
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    Услуги
                  </a>
                </li>
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    Построенные дома
                  </a>
                </li>
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    Технологии
                  </a>
                </li>
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    О нас
                  </a>
                </li>
                <li class="header__item col-auto">
                  <a href="" class="header__link">
                    Контакты
                  </a>
                </li>
              <ul>
          </div>
        </div>
      </div>
      <div class="col align-self-center d-flex justify-content-end">
        <button class="btn text-light p-2">Заказать звонок</button>
      </div>
    </div>
  </div>
</header>

<?php include 'modules/bunner.php' ?>


    <section class="section__offer">
      <div class="offer__block container pt-5 pb-5">
        <div class="row d-flex align-items-center">
          <div class="col-9 fs40 fnt-bld text-light">
            Хотите жить в новом Зеленом квартале<br>
            <strong class="offer">Vevanta?</strong> Оставьте заявку
          </div>
          <div class="col">
            <button class="offer__btn">
              <i class="icon-arrow-medium-right cl-dark-blue fs24"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <?php include 'modules/projects.php'?>
    <?php include 'modules/form.php'?>
    <?php include 'modules/advantages.php'?>
    <?php include 'modules/objects.php'?>
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
        spaceBetween: 30,
        loop: true,

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

</body>
</html>
