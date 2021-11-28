<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head() ?>
</head>
<?php
    global $body_class;
    $class = $body_class;
?>
<body class="<?= $class ?>">
<?php if(!is_404()) : ?>

<header class="header <?= $class ?: "white" ?> fixed">
    <div class="header-main container">
        <a href="<?= home_url() ?>">
            <img src="<?= get_template_directory_uri() . "/assets/img/logo-main.png" ?>" alt="" class="header-main-logo-white white">
            <img src="<?= get_template_directory_uri() . "/assets/img/logo-black.png" ?>" alt="" class="header-main-logo-black black">
        </a>

        <div class="header-main-items">
            <div class="header-main-items-top">
                <div class="header-main-items-top-item">
            
                    <img src="<?= IMG . "icon-geo-white.png" ?>" alt="" class="white">
                    <img src="<?= IMG . "icon-geo-black.png" ?>" alt="" class="black">

                    <?= get_theme_mod("address") ?>
                </div>
                <div class="header-main-items-top-item">

                    <img src="<?= IMG . "icon-time-white.png" ?>" alt="" class="white">
                    <img src="<?= IMG . "icon-time-black.png" ?>" alt="" class="black">

                    lunedì - venerdì dalle 09:00 alle 20:00
                </div>
                <div class="header-main-items-top-item">

                    <img src="<?= IMG . "icon-email-white.png" ?>" alt="" class="white">
                    <img src="<?= IMG . "icon-email-black.png" ?>" alt="" class="black">
                    <?= get_theme_mod("email") ?>

                </div>
                <div class="header-main-items-top-item">Russian / Italian</div>
            </div>
            <ul>
                <?php
                    $menu_items = wp_get_nav_menu_items("header");
                    foreach($menu_items as $item) : 
                ?>
                    <li>
                        <a href="<?= $item->url ?>"><?= $item->title ?></a>
                    </li>
                <?php endforeach ?>
                <li>
                    <a href="tel:<?= get_theme_mod("tel") ?>">
                        <img src="<?= IMG . "whatsapp-black.png" ?>" alt="" class="black">
                        <img src="<?= IMG . "whatsapp-white.png" ?>" alt="" class="white">
                        <?= get_theme_mod("tel") ?>
                    </a>
                </li>
            </ul>
        </div>
        
        <button class="btn no-marg modal_form_open">Сontatto</button>

    </div>
</header>


<!-- <div class="color">
<?= is_front_page() ? '<div class="haeder-title">' : '' ?>
        <div class="container">
            <div class="header-top">

                <div class="header-contacts <?= is_front_page() ? "white" : "" ?>">
                    <div class="map">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/map.png" alt="">
                        <p><?= get_theme_mod("address") ?></p>
                    </div>
                    <div class="clock">
                        <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/clock.png" alt="">
                        <p >lunedì - venerdì dalle 09:00 alle 20:00</p>
                    </div>

                    <div class="mail">
                        <a href="mailto:<?= get_theme_mod("email") ?>">
                            <img src="<?= get_template_directory_uri() . "/assets/img/" ?>header/icon/mail.png" alt="">
                            <?= get_theme_mod("email") ?>
                        </a>
                    </div>
                </div>

                <div class="lang">
                    <p>Russian</p>
                    <p>/</p>
                    <p>Italian</p>
                </div>
            </div>
            <header class="header <?= is_archive("news") ? "black" : "" ?>">
                <a href="<?= home_url() ?>">
                    <div class="title-logo">
                        <?php
                            if(is_front_page()){
                                $logo = "logo-main.png";
                            }
                            else{
                                $logo = $class == "black" ? "logo-main.png" : "logo-black.png";
                            }
                        ?>
                        <img src="<?= get_template_directory_uri() . "/assets/img/" . $logo ?>" alt="" class="title-logo-img">
                    </div>
                </a>
                <?php 
                    wp_nav_menu([
                        "menu" => "header"
                    ]);
                ?>
                <a href="tel:<?= get_theme_mod("tel") ?>" class="tel">
                    <img src="<?= get_template_directory_uri() . "/assets/img/header/icon/wp.png" ?>" alt="" class="tel-icon">
                    <?= get_theme_mod("tel") ?>
                </a>
                <button class="btn no-marg modal_form_open">Сontatto</button>
                
            </header>

            <?php if(is_front_page()) : ?>
                <div class="main-title">
                    <h1 class="main-title-text">Davide Poberejskii</h1>
                    <p class="main-subtitle">Avvocato di lingua russa in Italia</p>
                </div>
            <?php endif; ?>

        </div>
    <?= is_front_page() ? '</div>' : '' ?>
</div> -->


<?php endif ?>
