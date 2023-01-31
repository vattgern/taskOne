<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php wp_title('|', true, 'right'); ?> </title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>">
    </head>
    <body>
        <header class="header">
            <div class="header-head">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" alt="">
                        <p>sale@vsemcoffee.ru</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.svg" alt="">
                        <p>+7 999 808 08 10</p>
                    </li>
                </ul>
                <a href="#">Личный кабинет</a>
            </div>
            <div class="header-body">
                <div>
                    <h2 class="logo">Логотип</h2>
                    <ul class="navigation-list">
                        <li><a href="#">Каталог</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <ul class="navigation-icons">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/favorite.svg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/box.svg" alt=""></li>
                </ul>
            </div>
        </header>
        <section>
            <div class="contacts">
                <ul class="path">
                    <li>Главная</li>
                    <div class="dot"></div>
                    <li>Контакты</li>
                </ul>
                <h2>Контакты</h2>
                <ul class="contacts-list">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel2.svg" alt="">
                        <p>+7 999 808 08 10</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email2.svg" alt="">
                        <p>sale@vsemcoffee.ru</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location.svg" alt="">
                        <p>121374 г. Москва ул. Красных Зорь 41.</p>
                    </li>
                </ul>
            </div>
            <div class="form">
                <h2 class="form-header">Напишите нам</h2>
                <form class="form-body" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <input name="action" type="hidden" value="form_hook">
                    <input class="form-body-input" name="name" type="text" placeholder="Ваше имя">
                    <input class="form-body-input" name="tel" type="text" placeholder="Ваш телефон">
                    <input class="form-body-input" name="email" type="email" placeholder="Ваша почта">
                    <textarea class="form-body-textarea" name="body" placeholder="Ваш вопрос"></textarea>
                    <button class="form-body-submit" type="submit">Отправить</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="footer-head">
                <div>
                    <h2>ВсемCoffee</h2>
                    <p>
                        Интернет магазин оригинального
                        кофе Nespresso® c доставкой по всей России
                    </p>
                </div>
                <ul class="footer-list">
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
                <ul class="footer-contact-list">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" alt="">
                        <p>sale@vsemcoffee.ru</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.svg" alt="">
                        <p>+7 999 808 08 10</p>
                    </li>
                </ul>
            </div>
            <div class="footer-body">
                <ul>
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">© ВсемCoffee 2022</a></li>
                </ul>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>