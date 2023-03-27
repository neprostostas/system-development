<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="neprostostas">
    <title>SYS DEV</title>
    <script src="https://kit.fontawesome.com/02e8c33a85.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/imask"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
	<?php require "@commons/header.php" ?>

    <div class="video-block">

        <video class="video" playsinline autoplay loop muted src="assets/videos/intro.mp4" type="video/mp4"></video>

        <h3>
            Запускаємо рекламу та будуємо цілу систему
            <span>лише будівельній та ремонтній нішам!</span>
        </h3>

        <a href="#section1" class="anchor">
            <img class="scroll-button" src="assets/images/icons/scroll-button.svg" alt="scroll-button">
        </a>

        <div class="bt-rt-button">
            <img src="assets/images/icons/scroll-button.svg" alt="scroll-button">
        </div>

    </div>
    <div id="section1" class="anchor-block"></div>

    <div class="body-container">
        <div class="body-content">

            <div class="block-developers" data-aos="fade-left" data-aos-duration="1000">

                <div class="left-part">
                    <div class="green-block"></div>
                    <div class="dev-info-block">
                        <h3>ВИРОБНИКИ ТА ДИЛЕРИ</h3>
                        <button class="hide-mobile">
                            Консультація
                            <img src="assets/images/icons/arrow.svg" alt="arrow">
                        </button>
                        <div class="square-add hide-mobile" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                            <img class="img-line-hide1" src="assets/images/icons/line-2.svg" alt="line-2">
                            <p>Забудовники</p>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-1.svg" alt="line-1">
                        <p>Підлоги</p>
                    </div>
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-2.svg" alt="line-2">
                        <p>Кухонь</p>
                    </div>
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-3.svg" alt="line-3">
                        <p>Сантехніки</p>
                    </div>
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-4.svg" alt="line-4">
                        <p>Дверей</p>
                    </div>
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-5.svg" alt="line-5">
                        <p>Вікон</p>
                    </div>
                    <div class="square" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-6.svg" alt="line-6">
                        <p>Меблів</p>
                    </div>
                    <div class="square span-three show-mobile" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                        <img src="assets/images/icons/line-7.svg" alt="line-7">
                        <img src="assets/images/icons/line-8.svg" alt="line-8">
                        <p>Забудовники</p>
                    </div>
                </div>
                <div class="button-block">
                    <button class="show-mobile">
                        Консультація
                        <img src="assets/images/icons/arrow.svg" alt="arrow">
                    </button>
                </div>
            </div>
            <div class="three-cards" data-aos="fade-right" data-aos-duration="1000">
                <div class="card" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <h3>Ми беремо лише 1 клієнта на 1 місто України</h3>
                    <p>щоб бути в фокусі, викладатися на 100% і надати максимально можливий результат саме для вас</p>
                </div>
                <div class="card" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <h3>Замість 5 підрядників Ви наймаєте одного,</h3>
                    <p>який за рахунок свого досвіду в ніші повністю виконує весь спектр онлайн-робіт Вашого бізнесу під ключ!</p>
                </div>
                <div class="card" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <h3>Замість 5 підрядників Ви наймаєте одного,</h3>
                    <p>який за рахунок свого досвіду в будівельно-ремонтній ніші повністю виконує весь спектр онлайн-робіт Вашого бізнесу під ключ!</p>
                </div>
            </div>
            <div class="tablet-block" data-aos="flip-up" data-aos-duration="1000">
                <img src="assets/images/tablet.png" alt="tablet">

                <div class="text-block">
                    <p>Утримування власного маркетинг відділу це сотні тисяч гривень витрат.</p>
                    <p>Найм багатьох різних агенств на кожен напрямок - це некоординація та зайві витрати.</p>
                    <p>Для чого? Хіба не простіше довіритися одній компанії, яка зробить все?</p>
                    <button>
                        Детальніше
                        <img src="assets/images/icons/arrow.svg" alt="arrow">
                    </button>

                </div>
            </div>
            <div class="blocks-square" data-aos="fade-left" data-aos-duration="1000">
                <div class="text-block">
                    <div class="green-block"></div>
                    <div class="inner-block">
                        <h3>Ми компанія, яка бере всю відповідальність на себе та знімає всі клопоти з власника бізнесу.</h3>
                        <h3 class="green">Ми залучаємо до Вашого проекту велику та злагоджену команду та можемо Вам зробити:</h3>
                    </div>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>реклама пошукова</p>
                        <h3>Таргетована реклама</h3>
                    </div>
                    <hr>
                    <h2>FB&Instagram</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>реклама пошукова</p>
                        <h3>Реклама на маркетплейсах</h3>
                    </div>
                    <hr>
                    <h2>OLX, PROM, HOTLINE</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>сайт під ключ</p>
                        <h3>Унікальний сайт</h3>
                    </div>
                    <hr>
                    <h2>Окрема послуга</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>навчання</p>
                        <h3>Професійне Навчання менеджерів</h3>
                    </div>
                    <hr>
                    <h2>Збільшення конверсії продажів</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>реклама пошукова</p>
                        <h3>Вcі види і типи реклами</h3>
                    </div>
                    <hr>
                    <h2>Google/YouTube</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>реклама пошукова</p>
                        <h3>Повноцінний SMM</h3>
                    </div>
                    <hr>
                    <h2>Той яким він має бути, а не просто “заради картинки”</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>програмне забезпечення</p>
                        <h3>Розробка  BAF</h3>
                    </div>
                    <hr>
                    <h2>Система роботи компанії</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>аналітика</p>
                        <h3>Аналітика компанії</h3>
                    </div>
                    <hr>
                    <h2>Повна та прозора аналітика компанії в діяльності онлайн</h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>скрипти</p>
                        <h3>Розробка скриптів під вашу компанію</h3>
                    </div>
                    <hr>
                    <h2>Розробка скриптів для відділу продажів </h2>
                </div>
                <div class="block" data-tilt data-tilt-glare data-tilt-max-glare="0.4">
                    <div class="top-block">
                        <p>менеджмент</p>
                        <h3>Розробка CRM</h3>
                    </div>
                    <hr>
                    <h2>Інтегрована або стороння</h2>
                </div>
            </div>
            <div class="phone-form" data-aos="fade-right" data-aos-duration="1000">
                <img class="phone-img" src="assets/images/phone.png" alt="phone">

                <div class="form-blank">
                    <div class="green-block"></div>
                    <h2>Наші спеціалісти онлайн</h2>
                    <p>Ми проводимо безкоштовний аналіз загальних процесів, залишіть заявку та отримайте консультацію від керівника компанії</p>

                    <div class="form-box">

                        <div class="name-input-container">
                            <label for="name"></label>
                            <input id="name" type="text" placeholder="Ім’я">
                        </div>

                        <div class="tel-input-container">
                            <label for="tel"></label>
                            <input id="tel" type="tel" placeholder="+38 (0__) ___ __ __">
                        </div>

                        <button class="enter">
                            <img src="assets/images/icons/arrow.svg" alt="arrow">
                        </button>

                    </div>


                </div>

            </div>
            <div class="modal-phone-form">
                <div class="modal-phone-form-close"></div>
                <div class="modal-phone-form-content">
                    <img class="close-mpf" src="assets/images/icons/close.svg" alt="close">
                    <h2>НАДІСЛАНО!</h2>
                    <p>Очікуйте відповіді, невдовзі наш менеджер зв’яжеться з Вами</p>
                </div>
            </div>
            <div class="all-easy" data-aos="fade-left" data-aos-duration="1000">

                <div class="left-easy-block">

                    <h2>Все просто</h2>

                    <div class="easy-block-xs">
                        <div class="green-rectangle"></div>
                        <p>Тобто ми приходимо до вас у компанію та налагоджуємо лідогенерацію з усіх можливих джерел, вчимо менеджерів правильно опрацьовувати та “доводити” людей до купівлі і потім на підставі всіх даних будуємо повну аналітику</p>
                    </div>
                    <div class="easy-block-xs">
                        <div class="green-rectangle"></div>
                        <p>Починаючи працювати з нами, вам не потрібно наймати 4-7 підрядників на кожен напрямок, а потрібно лише одного, який відповідальний за результат всіх процесів</p>
                    </div>

                    <button class="detail-button">
                        Детальніше
                        <img src="assets/images/icons/arrow.svg" alt="arrow">
                    </button>

                </div>

                <div class="right-easy-block">

                    <img src="assets/images/ipad.png" alt="iPad">

                    <div class="easy-block-xs">
                        <div class="green-rectangle"></div>
                        <p>
                            <span class="green">Ми працюємо лише з 1 компанією 1 ніші в 1 місті</span>
                            Тобто якщо ми почали працювати з вами, то вже будемо викладатися на всі 100 саме для вас.
                        </p>
                    </div>

                    <div class="easy-block-xs">
                        <div class="green-rectangle"></div>
                        <p>Наймаючи вузькоспеціалізованих фахівців ринку, які відтестували вже до вас, ви ще й економите, тому що формуючи власний відділ, ви витратите набагато більше коштів і будете вчитися на своїх помилках.</p>
                    </div>

                </div>

            </div>
            <div class="laptop-block" data-aos="fade-right" data-aos-duration="1000">

                <div class="info-laptop">
                    <h2>Також якщо ви наймете собі всіх підрядників на послуги, які ми надаємо, то:</h2>

                    <ul class="list-advantages">
                        <li data-aos="fade-right" data-aos-duration="1000">
                            <div class="green-rectangle thin"></div>
                            <p>це буде <b>в рази дорожче</b></p></li>
                        <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            <div class="green-rectangle thin"></div>
                            <p>у випадку, якщо щось піде не так, як планувалось, вам буде <b>важко знайти винних</b></p></li>
                        <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="green-rectangle thin"></div>
                            <p><b>система, яка у вас вже працює, може зруйнуватись,</b> якщо рекомендації підрядників будуть суперечити одна одній.</p></li>
                        <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1500">
                            <div class="green-rectangle thin"></div>
                            <p>універсали, які працюють зі всіма нішами, <b>не знають специфіки вашого бізнесу</b> і пропонують стандартні рішення</p></li>
                    </ul>

                </div>

                <img src="assets/images/laptop.png" alt="laptop">

            </div>
            <div class="team-swiper" data-aos="flip-down" data-aos-duration="1000">

                <div class="header-team">
                    <div class="green-block"></div>
                    <h2>Команда</h2>
                </div>

                <div class="swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/team-1.png" alt="team-1">
                            <h4>Олександр Краєв</h4>
                            <p>Керівник відділу продажів</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/team-2.png" alt="team-2">
                            <h4>Грицишин Тарас</h4>
                            <p>Гугл</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/team-3.png" alt="team-3">
                            <h4>Тетяна Кінах</h4>
                            <p>SMM</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/team-1.png" alt="team-4">
                            <h4>Павло Нискогуз</h4>
                            <p>СЕО</p>
                        </div>
                    </div>

                    <div class="swiper-scrollbar"></div>

                </div>

            </div>
            <div class="level-header">

                <div class="top-level" data-aos="fade-right" data-aos-duration="1000">

                    <img src="assets/images/lvl-up.png" alt="lvl-up">

                    <h4><span>Ми прихильники послідовної побудови системи бізнесу</span>, бо, як показав досвід, 80% українських компаній не готові починати працювати одразу на другому рівні, тому ми зробили порівневий ріст</h4>

                </div>
                <div class="info-start" data-aos="fade-down" data-aos-duration="1000">

                    <h2 class="green-three-lvl">Наша система будується на трьох рівнях</h2>

                    <img class="bg-three-lvl-img" src="assets/images/bg-three-lvl.png" alt="bg-three-lvl">

<!--                    <img src="assets/images/icons/arrow-down.svg" alt="arrow-down">-->
<!---->
<!--                    <div class="container-layer">-->
<!---->
<!--                        <div class="center-layer">-->
<!--                            <h2>Наша система будується на трьох рівнях</h2>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->

                </div>
                <div class="level-one" data-aos="fade-right" data-aos-duration="1000">

                    <h2>Рівень 1</h2>

                    <div class="block-level">
                        <ul>
                            <li data-aos="fade-right" data-aos-duration="1000">
                                <div class="green-circle"></div>
                                <p>00 Проводимо повний аналіз соцмереж Вашого бізнесу.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                <div class="green-circle"></div>
                                <p>01 Налаштовуємо таргетовану рекламу в Facebook&Instagram на різні сегменти (інтереси) аудиторії.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <div class="green-circle"></div>
                                <p>02 Створюємо рекламні банери під кожен сегмент аудиторії.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1500">
                                <div class="green-circle"></div>
                                <p>03 Постимо 5 постів та 30 історій в місяць.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <div class="green-circle"></div>
                                <p>04 Навчаємо 1 менеджера опрацьовувати правильно заявки та надаємо йому скрипт.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2500">
                                <div class="green-circle"></div>
                                <p>05 Виводимо на один з маркетплейсів України</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="3000">
                                <div class="green-circle"></div>
                                <p>06 Щотижневі звіти за всіма показниками кожного запуску.</p>
                            </li>
                        </ul>
                        <div class="summary-block">
                            <h3>Вартість</h3>
                            <button>
                                Замовити
                                <img src="assets/images/icons/arrow.svg" alt="arrow">
                            </button>
                        </div>
                    </div>

                </div>
                <div class="level-pro" data-aos="fade-left" data-aos-duration="1000">

                    <div class="left-block-pro">
                        <h2>Рівень PRO</h2>
                        <img src="assets/images/pro-tablets.png" alt="pro-tablets">
                    </div>

                    <div class="block-level">

                        <div class="badge-panel">
                            <p>Всі послуги</p>

                            <div class="lvl-group">
                                <h4>Рівень 1</h4>
                                <img class="info-trigger" src="assets/images/icons/info.svg" alt="info">
                            </div>
                        </div>

                        <ul>
                            <li data-aos="fade-right" data-aos-duration="1000">
                                <div class="green-circle"></div>
                                <p>07 СRМ-СИСТЕМА</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                <div class="green-circle"></div>
                                <p>08 Повний аналіз відділу продажів та проведення аналізу кожного менеджера</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <div class="green-circle"></div>
                                <p>09 Перевірка провідним спеціалістом рівня залученості в навчання менеджерами та формування по кожному менеджеру звітність.
                                    Проведення конференцій та надання рекомендацій та завдань.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1500">
                                <div class="green-circle"></div>
                                <p>10 Розробляємо ІНДИВІДУАЛЬНІ СКРИПТИ ПРОДАЖУ
                                    Проведення інструктажу для усіх менеджерів, як правильно користуватися скриптом, щоб мати розуміння, як довести людину до покупки.</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <div class="green-circle"></div>
                                <p>11 Реклама в Google, створення та наповнення Google-точок</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <div class="green-circle"></div>
                                <p>12 Рекомендації щодо сайту + корекція існуючого. Чи розробка нового сайту з нуля* (за додаткову плату)</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <div class="green-circle"></div>
                                <p>13 Робота з маркетплейсами OLX, PROM, HOTLINE (на вибір)</p>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2500">
                                <div class="green-circle"></div>
                                <p>14 Розробка чи корегування BAF аналітики та загальної системи бізнесу</p>
                            </li>

                        </ul>
                        <div class="summary-block">
                            <h3>Вартість</h3>
                            <button>
                                Замовити
                                <img src="assets/images/icons/arrow.svg" alt="arrow">
                            </button>
                        </div>
                    </div>

                </div>
                <div class="level-max" data-aos="fade-right" data-aos-duration="1000">

                    <h2>Рівень MAX</h2>

                    <div class="block-level">

                        <p>Партнерсько працюємо  у Вашому бізнесі. Умови та деталі обговорюються індивідуально.</p>

                        <p> При заключенні угоди обговорюється умова, що ми отримуємо виплати лише від заробітку суто від нашої роботи. Вибудовується чітка аналітика, в якій Ви будете все бачити.</p>

                        <p class="green">Фактично робота за %</p>

                        <div class="summary-block">
                            <h3>Вартість</h3>
                            <button>
                                Замовити
                                <img src="assets/images/icons/arrow.svg" alt="arrow">
                            </button>
                        </div>
                    </div>

                </div>
                <div class="difference-block" data-aos="fade-left" data-aos-duration="1000">

                    <h2>Яка різниця між усіма рівнями і чому ми зробили саме такий поділ?</h2>

                    <div class="cooperation-box">
                        <h5>
                            <span>Зазвичай ми пропонуємо клієнтам починати працювати з першого рівня, щоб вони змогли побачити результат від співпраці.</span>
                            <br>
                            Ми виявляємо всі проблеми та помилки конкретного бізнесу і тоді вже після проведення повноцінного аналізу та вирішення проблем, які виникають на першому етапі, переходимо на другий, максимально систематизований.
                        </h5>
                    </div>

                </div>

            </div>
            <div class="modal-level1-form">
                <div class="modal-level1-form-close"></div>
                <div class="modal-level1-form-content">
                    <img class="close-mlf" src="assets/images/icons/close.svg" alt="close">

                    <ul>
                        <li>
                            <div class="green-circle"></div>
                            <p>00 Проводимо повний аналіз соцмереж Вашого бізнесу.</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>01 Налаштовуємо таргетовану рекламу в Facebook&Instagram на різні сегменти (інтереси) аудиторії.</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>02 Створюємо рекламні банери під кожен сегмент аудиторії.</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>03 Постимо 5 постів та 30 історій в місяць.</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>04 Навчаємо 1 менеджера опрацьовувати правильно заявки та надаємо йому скрипт.</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>05 Виводимо на один з маркетплейсів України</p>
                        </li>
                        <li>
                            <div class="green-circle"></div>
                            <p>06 Щотижневі звіти за всіма показниками кожного запуску.</p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="cases-swiper" data-aos="fade-left" data-aos-duration="1000">

                <div class="header-cases">
                    <div class="green-block"></div>
                    <h2>Кейси наших робіт</h2>
                </div>

                <div class="swiper swiper2">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper2-slide">

                            <div class="container">
                                <div class="top-part">
                                    <h3>Рівень 1</h3>
                                    <div class="green-rectangle thin mt-0"></div>

                                    <h2>Podil Doors</h2>
                                    <p class="little-text">міжкімнатні та вхідні двері</p>

                                    <ul class="list-product">
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>102</b> клієнта за перший місяць</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>100 000+</b> грн валового доходу з реклами за 1 місяць</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="end-part">
                                    <img class="product-slide" src="assets/images/product-1.png" alt="product-1">

                                    <div class="logo-container">
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/fb.svg" alt="fb">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/pinterest.svg" alt="pinterest">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/yt.svg" alt="yt">
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-slide swiper2-slide">

                            <div class="container">
                                <div class="top-part">

                                    <h3>Рівень PRO</h3>
                                    <div class="green-rectangle thin mt-0"></div>

                                    <h2>Terminus</h2>
                                    <p class="little-text">міжкімнатні двері Рівне</p>

                                    <ul class="list-product">
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>529</b> клієнтів</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>2 000 000+</b> грн валового доходу з реклами</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>95 %</b> людей, які приходять в Terminus, вже знають про бренд та його переваги</p>
                                        </li>
                                    </ul>

                                </div>

                                <div class="end-part">
                                    <img class="product-slide" src="assets/images/product-2.png" alt="product-2">

                                    <div class="logo-container">
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/fb.svg" alt="fb">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/pinterest.svg" alt="pinterest">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/yt.svg" alt="yt">
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-slide swiper2-slide">

                            <div class="container">

                                <div class="top-part">

                                    <h3>Рівень PRO</h3>
                                    <div class="green-rectangle thin mt-0"></div>

                                    <h2>Terminus</h2>
                                    <p class="little-text">міжкімнатні двері Рівне</p>

                                    <ul class="list-product">
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>529</b> клієнтів</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>2 000 000+</b> грн валового доходу з реклами</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>95 %</b> людей, які приходять в Terminus, вже знають про бренд та його переваги</p>
                                        </li>
                                    </ul>

                                </div>

                                <div class="end-part">
                                    <img class="product-slide" src="assets/images/product-2.png" alt="product-2">

                                    <div class="logo-container">
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/fb.svg" alt="fb">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/pinterest.svg" alt="pinterest">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/yt.svg" alt="yt">
                                        </a>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="swiper-slide swiper2-slide">

                            <div class="container">

                                <div class="top-part">

                                    <h3>Рівень PRO</h3>
                                    <div class="green-rectangle thin mt-0"></div>

                                    <h2>Terminus</h2>
                                    <p class="little-text">міжкімнатні двері Рівне</p>

                                    <ul class="list-product">
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>529</b> клієнтів</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>2 000 000+</b> грн валового доходу з реклами</p>
                                        </li>
                                        <li>
                                            <div class="green-rectangle thin"></div>
                                            <p><b>95 %</b> людей, які приходять в Terminus, вже знають про бренд та його переваги</p>
                                        </li>
                                    </ul>

                                </div>

                                <div class="end-part">
                                    <img class="product-slide" src="assets/images/product-2.png" alt="product-2">

                                    <div class="logo-container">
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/fb.svg" alt="fb">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/pinterest.svg" alt="pinterest">
                                        </a>
                                        <a class="logo-a" href="#">
                                            <img src="assets/images/icons/yt.svg" alt="yt">
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="swiper-scrollbar swiper2-scrollbar"></div>

                </div>

            </div>
            <div class="map-block" data-aos="fade-right" data-aos-duration="1000">

                <div class="ukraine-block">
                    <h2>Наші клієнти вже присутні у <span>11 містах України</span></h2>
                    <img class="ukraine-img" src="assets/images/ukraine-phone.png" alt="ukraine-phone">
                </div>

                <div class="others-block">
                    <div class="kazakhstan-block">
                        <h2><span>6 містах</span> Казахстану</h2>
                        <img class="kazakhstan-img" src="assets/images/kazakhstan.png" alt="kazakhstan-map">
                    </div>
                    <div class="romania-block">
                        <img class="romania-img" src="assets/images/romania.png" alt="romania-map">
                        <h2>І в <span>3 містах</span> Румунії</h2>
                    </div>
                </div>

            </div>
            <div class="main-form" data-aos="fade-left" data-aos-duration="1000">

                <img class="bg-circles" src="assets/images/form-back.png" alt="form-back">

                <div class="content-block">
                    <h3>Наші спеціалісти онлайн</h3>
                    <p>Залишіть свій номер та спеціаліст зв’яжеться з вами впродовж 30 хв.</p>

                    <div class="phone-form main">

                        <div class="form-box">

                            <div class="name-input-container">
                                <label for="name"></label>
                                <input id="name" type="text" placeholder="Ім’я">
                            </div>

                            <div class="tel-input-container">
                                <label for="tel2"></label>
                                <input id="tel2" type="tel" placeholder="+38 (0__) ___ __ __">
                            </div>

                            <button class="enter enter2">
                                <img src="assets/images/icons/arrow.svg" alt="arrow">
                            </button>

                        </div>

                    </div>

                    <div class="checkbox-container">
                        <input type="checkbox" id="personal" name="personal">
                        <label for="personal">Даю згоду на обробку персональних даних. <br class="mobile-only"> <span>Політика конфіденційності</span></label>
                    </div>

                </div>

            </div>
            <div class="final-block" data-aos="fade-right" data-aos-duration="1000">

                <img src="assets/images/lvl-up.png" alt="lvl-up">

                <div class="quote-block">
                    <img src="assets/images/icons/quotes.svg" alt="quotes">
                    <h4>Побудуйте цілу систему бізнесу не вчившись на своїх помилках, а довіртеся одному підряднику, який зробить все</h4>
                </div>

            </div>

        </div>
    </div>

    <?php require "@commons/footer.php" ?>

    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>

</body>
</html>