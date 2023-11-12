<?php
    $promo_prices = mysqli_query($connect, "SELECT * FROM `promo_prices` ORDER BY `order` ASC");
    $promo_prices = mysqli_fetch_all($promo_prices, MYSQLI_ASSOC);
    $count = count($promo_prices);
    for ($i = 0; $i < $count; $i++) {
        $promo_price = $promo_prices[$i];
    ?>
    <li class="promo_prices_items">
        <h4 class="promo_prices_items_title"><?php echo $promo_price['title']; ?></h4>
        <div class="promo_prices_items_price_block">
            <h1 class="promo_prices_items_price"><?php echo number_format($promo_price['price'], 0, '.', ' '); ?> ₽</h1>
            <p class="promo_prices_items_discount">
                -<?php echo 
                    $discount = round((($promo_price['oldprice'] - $promo_price['price']) / $promo_price['oldprice']) * 100);
                ?>%
            </p>
        </div>
        <h4 class="promo_prices_items_oldprice"><?php echo number_format($promo_price['oldprice'], 0, '.', ' '); ?> ₽</h4>
        <ul class="promo_prices_items_description">
            <li class="promo_prices_items_description_mains">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <?php echo $promo_price['months']; ?> месяца обучения
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Грамматическая выжимка
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Разговорный тренажёр
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Слова с ассоциациями
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Регулярные мини-задания
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Персональный куратор
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Сертификат об обучении
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Best Teachers
            </li>
            <li class="promo_prices_items_description_mains">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Звонки от Second Teacher
            </li>
        </ul>
        <h4 class="promo_prices_items_prepay_title">Предоплата</h4>
        <h3 class="promo_prices_items_prepay"><?php echo number_format($promo_price['prepay'], 0, '.', ' '); ?> ₽</h3>
        <button>внести предоплату из рф</button>
        <button>внести предоплату из-за границы</button>
    </li>
    <?php
    }
?>