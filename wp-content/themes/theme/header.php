<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https:" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
<div id="app">
<div class="color">
    <?= is_front_page() ? '<div class="title">' : '' ?>
        <div class="container">
            <div class="header-top">
                <div class="header-contacts">
                    <div class="map">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/map.png" alt="">
                        <p >Via Borromei, 2 20123, Milano Italia</p>
                    </div>
                    <div class="clock">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/clock.png" alt="">
                        <p >lunedì - venerdì dalle 09:00 alle 20:00</p>
                    </div>
                    <div class="mail">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/mail.png" alt="">
                        <p >dp@studiolap.it</p>					
                    </div>
                </div>
                <div class="lang">
                    <p>Russian</p>
                    <p>/</p>
                    <p>Italian</p>
                </div>
            </div>
            <header class="header">
                <div class="title-logo">
                    <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/logo-main.png" alt="" class="title-logo-img">
                </div>
                <ul class="menu">
                    <li class="menu-item">Pagina iniziale</li>
                    <li class="menu-item">Chi sono</li>
                    <li class="menu-item">Servizi</li>
                    <li class="menu-item">Blog</li>
                    <li class="menu-item">Contatti</li>
                </ul>
                <div class="tel">
                    <div class="tel-div">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/wp.png" alt="" class="tel-icon">
                        <p class="tel-num">+390280886791</p>
                    </div>
                    <p class="tel-btn">Сontatto</p>
                </div>
            </header>

            <?php if(is_front_page()) : ?>
                <div class="main-title">
                    <h1 class="main-title-text">Davide Poberejskii</h1>
                    <p class="main-subtitle">Avvocato di lingua russa in Italia</p>
                </div>
            <?php endif; ?>

        </div>
    <?= is_front_page() ? '</div>' : '' ?>
</div>