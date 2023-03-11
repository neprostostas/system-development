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
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
	<?php require "@commons/header.php" ?>

    <div class="video-block bg-block">

        <div class="video"></div>

        <h3>LEVEL UP</h3>

        <a href="#section1" class="anchor">
            <img class="scroll-button" src="assets/images/icons/scroll-button.svg" alt="scroll-button">
        </a>

    </div>
    <div id="section1" class="anchor-block"></div>

    <div class="body-container">
        <div class="body-content contacts">

            <div class="contacts-top">
                <div class="green-block"></div>
                <h2>ОБЕРІТЬ ОДИН З 3-Х ВАРІАНТІВ ЗВ'ЯЗКУ </h2>
            </div>
            <div class="main-form">

                <div class="content-block">

                    <img class="bg-circles" src="assets/images/form-back-contact.png" alt="form-back-contact">

                    <div class="top-index">
                        <h3>1 варіант</h3>
                        <p class="name-text">Залиште своє ім’я та номер телефону у формі нижче та ми швидко вам зателефонуємо</p>
                    </div>

                    <div class="wrap-form">

                        <div class="phone-form main">

                            <div class="form-box">

                                <p class="mb-text">Залиште своє ім’я та номер телефону у формі нижче та ми швидко вам зателефонуємо</p>

                                <div class="name-input-container">
                                    <label for="name"></label>
                                    <input id="name" type="text" placeholder="Ім’я">
                                </div>

                                <div class="tel-input-container">
                                    <label for="tel2"></label>
                                    <input id="tel2" type="tel" placeholder="+38 (0__) ___ __ __">
                                </div>

                                <button class="enter enter2">
                                    <span class="dk">Замовити дзвінок</span>
                                    <span class="mb">Надіслати</span>
                                    <img src="assets/images/icons/arrow.svg" alt="arrow">
                                </button>

                                <div class="checkbox-container">
                                    <input type="checkbox" id="personal" name="personal">
                                    <label for="personal">Даю згоду на обробку персональних даних. <br class="mobile-only"> <span>Політика конфіденційності</span></label>
                                </div>

                            </div>

                        </div>

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
            <div class="final-block one"></div>
            <div class="main-form">

                <div class="content-block">

                    <img class="bg-circles" src="assets/images/form-back-contact.png" alt="form-back-contact">

                    <div class="top-index">
                        <h3>2 варіант</h3>
                        <p class="name-text">Оберіть зручного вам оператора мобільного зв'язку чи надішліть е-mail, просто натисніть на необхідний номер чи е-mail і ми відповімо</p>
                    </div>

                    <div class="wrap-form">

                        <div class="phone-form main">

                            <div class="form-box-second">

                                <div class="form-inner-part">
                                    <img src="assets/images/icons/phone-vibro.svg" alt="phone-vibro">
                                    <div class="phone-block">
                                        <p>+38 073 050 25 50</p>
                                        <p>+38 068 050 25 50</p>
                                    </div>
                                </div>

                                <div class="form-inner-part">
                                    <img src="assets/images/icons/mail.svg" alt="mail">
                                    <div class="phone-block">
                                        <p>+38 073 050 25 50</p>
                                        <p>+38 068 050 25 50</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>
            <div class="final-block two"></div>
            <div class="final-block last">

                <img src="assets/images/lvl-up.png" alt="lvl-up">

                <div class="quote-block">
                    <img src="assets/images/icons/quotes.svg" alt="quotes">
                    <h4>Побудуйте цілу систему бізнесу не вчившись на своїх помилках, а довіртеся одному підряднику, який зробить все</h4>
                </div>

            </div>

        </div>
    </div>

    <?php require "@commons/footer.php" ?>

    <script src="js/contacts.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
</body>
</html>