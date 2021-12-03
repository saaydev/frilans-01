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
    global $is_black;
    $class_body = "";
    $class = "";
    switch(true){
        case is_page_template("templates/template-gallery.php"): $class = "black"; break;
        case is_page_template("templates/template-contacts.php"): $class = "black"; break;
        case is_archive("news"): $class = "black"; break;
    }
    switch(true){
        case is_single(): $class_body = "black"; break;
        case is_page_template("templates/template-about.php"): $class_body = "black"; break;
        case $is_black: $class_body = "black"; break;
    }
?>
<?php 
?>
<body class="<?= $class_body ?>">
<?php if(!is_404()) : ?>

<header class="header container <?= $class ?: "white" ?> <?= is_front_page() ? "absolute" : "" ?>">
    <div class="header-main">
        <a href="<?= home_url() ?>">
            <img src="<?= IMG . "logo-main.png" ?>" alt="" class="header-main-logo-white white">
            <img src="<?= IMG . "logo-black.png" ?>" alt="" class="header-main-logo-black black">
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

                    <?= get_theme_mod("time") ?>
                </div>
                <div class="header-main-items-top-item">

                    <img src="<?= IMG . "icon-email-white.png" ?>" alt="" class="white">
                    <img src="<?= IMG . "icon-email-black.png" ?>" alt="" class="black">
                    <?= get_theme_mod("email") ?>

                </div>
                <div class="header-main-items-top-item">Russian / Italian</div>
            </div>
            <?php the_ID(); ?>
            <ul>
                <?php
                   
                    $menu_items = wp_get_nav_menu_items("header");
                    $current_url = get_page_link(get_the_ID() ?: get_queried_object_id());
                    foreach($menu_items as $item){
                        if(!$item->menu_item_parent){
                            printf('<li class="%s"><a href="%s">%s</a></li>',
                                $item->url == $current_url ? "current" : "",
                                $item->url,
                                $item->title,
                            );
                        }
                    }
                ?>
                <li class="tel">
                    <a href="tel:<?= get_theme_mod("tel") ?>">
                        <img src="<?= IMG . "whatsapp-black.png" ?>" alt="" class="black">
                        <img src="<?= IMG . "whatsapp-white.png" ?>" alt="" class="white">
                        <?= get_theme_mod("tel") ?>
                    </a>
                </li>
            </ul>
        </div>
        
        <button class="btn no-marg modal_form_open">Сontatto</button>
        <button class="open_menu">
            <img src="<?= IMG . "menu-open-mobile.png" ?>" alt="">
        </button>

    </div>
</header>
<?php endif ?>
