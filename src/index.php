<?php

require_once './backend/config/connect.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ТЗ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="assets/styles/fonts.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
    </head>
    <body>
        <header>
            <div class="header-title">
                <img id="header-title-img" src="assets/images/icons-8-english-961.png" alt="Title-icon">
                <p id="header-title-text">English</p>
            </div>
        </header>
        <section class="containers main-container">
            <div id="main-container-block">
                <h1>Вкладывайте незначительные деньги каждый день в копилку своих знаний.</h1>
                <h2>Следующий курс для вас будет стоить всего <strong>178 рублей в день</strong></h2>
                <div class="main-container-calendar-block">
                    <div class="main-container-calendar"> 
                        <p id="main-container-calendar-day-start">01</p>
                        <div>
                            <p id="main-container-calendar-month-start">Ноября</p>
                            <p class="main-container-calendar-text">Ближайший старт</p>
                        </div>
                    </div>
                    <div class="main-container-calendar"> 
                        <p id="main-container-calendar-day-end">21</p>
                        <div>
                            <p id="main-container-calendar-month-end">Октября</p>
                            <p class="main-container-calendar-text">Конец акции</p>
                        </div>
                    </div>
                </div>
                <div class="main-container-buttons-block">
                    <button class="main-container-buttons" id="main-container-button-about">Узнать подробнее</button>
                    <button class="main-container-buttons" id="main-container-button-free-сonsultation">Бесплатная консультация</button>
                </div>
            </div>
            <img id="main-container-img" src="assets/images/unnamed.png" alt="Main container image">
            <div id="main-container-bakcground-img-first"></div>
            <div id="main-container-bakcground-img-second"></div>
            <div id="main-container-background-block"></div>
        </section>
        <section class="containers second-container">
            <h1 id="second-container-title">Выберите свой вариант обучения</h1>
            <div id="second-container-block">
                <ul id="promo_prices">
                    <?php include 'backend/controller/getPromoPrices.php'; ?>
                </ul>
            </div>
        </section>
        <section class="containers third-container">
            <form method="POST" id="postClientData">
                <h1>Ещё думаете?</h1>
                <h4>Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение</h4>
                <input type="text" name="name" placeholder="Введите ваше имя">
                <input type="number" name="phone" placeholder="Введите ваш телефон">
                <input type="email" name="email" placeholder="Введите ваш email">
                <button type="submit">ЗАПИСАТЬСЯ</button>
                <p>Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой конфиденциальности</p>
            </form>
            <p id="successMessage" style="display: none;">Данные успешно отправлены</p>
            <p id="errorMessage" style="display: none;">Произошла ошибка при отправке данных</p>
        </section>
        <footer>
            <div class="footer-title">
                <img id="footer-title-img" src="assets/images/icons-8-english-962.png" alt="Title-icon">
                <p id="footer-title-text">English</p>
            </div>
            <h4>2015 - 2021 © English. Все права защищены.<br>
                Политика конфиденциальности
                Соглашение об обработке персональных данных</h4>
            <p class="footer-adress">ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0 <br>
                ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000</p>
            <div>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15" viewBox="0 0 30 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6782 14.9369H16.4715C16.4715 14.9369 17.0128 14.8849 17.2893 14.624C17.5446 14.3836 17.5361 13.9333 17.5361 13.9333C17.5361 13.9333 17.5011 11.8249 18.6176 11.5139C19.7182 11.2075 21.1323 13.5517 22.6301 14.4532C23.7636 15.1356 24.6248 14.9861 24.6248 14.9861L28.6309 14.9369C28.6309 14.9369 30.7262 14.8237 29.7326 13.38C29.651 13.2621 29.1532 12.3114 26.7539 10.359C24.2413 8.31553 24.5782 8.64604 27.6045 5.11067C29.4466 2.95862 30.1838 1.644 29.9529 1.08139C29.7337 0.544768 28.3788 0.686814 28.3788 0.686814L23.8674 0.710952C23.8674 0.710952 23.5327 0.671031 23.2848 0.801008C23.0433 0.9282 22.8876 1.22529 22.8876 1.22529C22.8876 1.22529 22.1725 2.89085 21.2213 4.3076C19.2129 7.29707 18.4089 7.4549 18.0806 7.26922C17.3168 6.83658 17.5075 5.53217 17.5075 4.60469C17.5075 1.70713 18.0096 0.499276 16.5319 0.186403C16.0415 0.0833498 15.6802 0.0146477 14.4261 0.00350683C12.817 -0.0113477 11.4548 0.00722047 10.6836 0.338662C10.1699 0.558694 9.77372 1.04982 10.0152 1.07767C10.3129 1.11295 10.9887 1.23736 11.3467 1.66443C11.8086 2.2159 11.7927 3.45346 11.7927 3.45346C11.7927 3.45346 12.0586 6.8635 11.172 7.28778C10.5639 7.57745 9.73029 6.98512 7.93905 4.27232C7.02172 2.88342 6.32895 1.34784 6.32895 1.34784C6.32895 1.34784 6.19548 1.06096 5.95715 0.906846C5.66796 0.721165 5.26438 0.661747 5.26438 0.661747L0.977491 0.686814C0.977491 0.686814 0.334511 0.702597 0.0982924 0.947696C-0.112504 1.16587 0.081344 1.61708 0.081344 1.61708C0.081344 1.61708 3.43713 8.49842 7.23675 11.966C10.7218 15.1458 14.6782 14.9369 14.6782 14.9369Z" fill="white"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                            <path d="M23.2477 4.18179L3.30143 11.8734C1.94018 12.4202 1.94806 13.1795 3.05168 13.5182L8.17268 15.1157L20.0212 7.64004C20.5814 7.29916 21.0933 7.48254 20.6726 7.85604L11.0729 16.5197H11.0707L11.0729 16.5208L10.7197 21.7993C11.2372 21.7993 11.4656 21.5619 11.7558 21.2818L14.2432 18.863L19.4171 22.6847C20.3711 23.21 21.0562 22.94 21.2936 21.8015L24.6899 5.79504C25.0376 4.40116 24.1578 3.77004 23.2477 4.18179Z" fill="white"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </footer>
        <script src="components/postClientData/postClientData.js"></script>
        <script src="components/scrollToPrices/scrollToPrices.js"></script>
        <script src="components/scrollToConsultation/scrollToConsultation.js"></script>
    </body>
</html>