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
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
	<?php require "@commons/header.php" ?>

    <div class="packages-top-block error">

        <div class="container">
            <img class="img-404" src="assets/images/404.png" alt="404">

            <h2>Упс, щось зламалось!</h2>

            <p>А Ви що, думали тільки в ДТЕК щось ламається? Бригада вже виїхала!</p>

            <button>
                Замовити дзвінок
                <img src="assets/images/icons/arrow.svg" alt="arrow">
            </button>
        </div>

    </div>

    <div class="body-container">
        <div class="body-content error">

            <div class="modal-phone-form">
                <div class="modal-phone-form-close"></div>
                <div class="modal-phone-form-content">
                    <img class="close-mpf" src="assets/images/icons/close.svg" alt="close">
                    <h2>НАДІСЛАНО!</h2>
                    <p>Очікуйте відповіді, невдовзі наш менеджер зв’яжеться з Вами</p>
                </div>
            </div>

        </div>
    </div>

    <?php require "@commons/footer.php" ?>

    <script src="js/404.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
</body>
</html>