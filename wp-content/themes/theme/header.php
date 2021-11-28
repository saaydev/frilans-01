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

<!-- <header class="header">
    <div class="header-top">

        <div class="header-top-item">
           
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0917 6.6001C10.6384 6.6001 10.1953 6.7345 9.81848 6.98631C9.44162 7.23812 9.14789 7.59603 8.97444 8.01478C8.80099 8.43353 8.75561 8.89431 8.84403 9.33885C8.93246 9.78338 9.15072 10.1917 9.47121 10.5122C9.79171 10.8327 10.2 11.051 10.6446 11.1394C11.0891 11.2278 11.5499 11.1824 11.9686 11.009C12.3874 10.8355 12.7453 10.5418 12.9971 10.1649C13.2489 9.78808 13.3833 9.34501 13.3833 8.89176C13.3826 8.28419 13.141 7.7017 12.7114 7.27208C12.2817 6.84245 11.6992 6.60079 11.0917 6.6001ZM11.0917 10.0376C10.865 10.0376 10.6435 9.97039 10.4551 9.84449C10.2666 9.71858 10.1198 9.53963 10.0331 9.33026C9.94633 9.12088 9.92364 8.89049 9.96785 8.66822C10.0121 8.44595 10.1212 8.24178 10.2814 8.08154C10.4417 7.92129 10.6459 7.81216 10.8681 7.76795C11.0904 7.72373 11.3208 7.74643 11.5302 7.83315C11.7395 7.91988 11.9185 8.06674 12.0444 8.25517C12.1703 8.4436 12.2375 8.66514 12.2375 8.89176C12.2371 9.19555 12.1163 9.48679 11.9015 9.7016C11.6867 9.91641 11.3955 10.0372 11.0917 10.0376Z" fill="#252736"/>
                <path d="M15.3048 4.72917C14.263 3.65716 12.8724 3.02034 11.4013 2.94163C9.9302 2.86291 8.48292 3.34787 7.33878 4.30291C6.19464 5.25795 5.43475 6.61536 5.20577 8.11317C4.9768 9.61098 5.29496 11.143 6.09886 12.4136L10.2412 18.959C10.3333 19.1046 10.4594 19.2243 10.6078 19.3071C10.7563 19.39 10.9225 19.4333 11.0914 19.4333C11.2603 19.4333 11.4265 19.39 11.575 19.3071C11.7234 19.2243 11.8495 19.1046 11.9417 18.959L16.0841 12.4136C16.83 11.2349 17.1597 9.82821 17.0178 8.42917C16.8759 7.03014 16.2711 5.72381 15.3048 4.72917ZM15.1655 11.7976L11.0914 18.235L7.01731 11.7976C5.77024 9.82709 6.03771 7.19006 7.65328 5.52708C8.10478 5.06234 8.64079 4.69369 9.23071 4.44218C9.82063 4.19066 10.4529 4.06121 11.0914 4.06121C11.73 4.06121 12.3622 4.19066 12.9521 4.44218C13.5421 4.69369 14.0781 5.06234 14.5296 5.52708C16.1451 7.19006 16.4126 9.82709 15.1655 11.7976Z" fill="#252736"/>
            </svg>
            Via Borromei, 2 20123, Milano Italia
        </div>
        <div class="header-top-item">
           
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.275 18.1499C15.072 18.1499 18.15 15.0719 18.15 11.2749C18.15 7.47794 15.072 4.3999 11.275 4.3999C7.47804 4.3999 4.39999 7.47794 4.39999 11.2749C4.39999 15.0719 7.47804 18.1499 11.275 18.1499Z" stroke="#252736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.8705 7.63525V11.4098L13.297 13.297" stroke="#252736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            lunedì - venerdì dalle 09:00 alle 20:00
        </div>
        <div class="header-top-item">
            
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.0312 10H23.7188C24.2376 9.99997 24.7368 10.1941 25.1139 10.5425C25.491 10.8909 25.7175 11.3672 25.7469 11.8737L25.75 11.9861V19.0139C25.75 19.5212 25.5515 20.0093 25.1952 20.378C24.8389 20.7468 24.3518 20.9682 23.8337 20.9969L23.7188 21H14.0312C13.5124 21 13.0132 20.8059 12.6361 20.4575C12.259 20.1091 12.0325 19.6328 12.0031 19.1263L12 19.0139V11.9861C12 11.4788 12.1985 10.9907 12.5548 10.622C12.9111 10.2532 13.3982 10.0318 13.9162 10.0031L14.0312 10H23.7188H14.0312ZM24.8125 13.6086L19.0912 16.5175C19.0358 16.5457 18.9752 16.5627 18.913 16.5676C18.8507 16.5726 18.7881 16.5653 18.7287 16.5462L18.6588 16.5175L12.9375 13.6086V19.0139C12.9375 19.2823 13.0407 19.5409 13.2267 19.7383C13.4126 19.9357 13.6677 20.0576 13.9412 20.0797L14.0312 20.0833H23.7188C23.9933 20.0833 24.2579 19.9823 24.4598 19.8004C24.6618 19.6184 24.7863 19.3689 24.8088 19.1013L24.8125 19.0139V13.6086ZM23.7188 10.9167H14.0312C13.7568 10.9167 13.4923 11.0176 13.2904 11.1994C13.0885 11.3812 12.9638 11.6306 12.9413 11.8981L12.9375 11.9861V12.5752L18.875 15.5941L24.8125 12.5752V11.9861C24.8125 11.7176 24.7092 11.459 24.5231 11.2615C24.337 11.0641 24.0818 10.9423 23.8081 10.9203L23.7188 10.9167Z" fill="#252736"/>
            </svg>
            dp@studiolap.it

        </div>
        <div class="header-top-item">Russian / Italian</div>
    </div>

    <div class="header-main container">
        <img src="<?= get_template_directory_uri() . "/assets/img/logo-main.png" ?>" alt="" class="header-main-logo-white">
        <img src="<?= get_template_directory_uri() . "/assets/img/logo-black.png" ?>" alt="" class="header-main-logo-black">

        <?php wp_nav_menu(["menu" => "header"]) ?>

        <a href="tel:<?= get_theme_mod("tel") ?>" class="tel">
            <img src="<?= get_template_directory_uri() . "/assets/img/header/icon/wp.png" ?>" alt="" class="tel-icon">
            <?= get_theme_mod("tel") ?>
        </a>

        <button class="btn no-marg modal_form_open">Сontatto</button>

    </div>
</header> -->


<div class="color">
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
</div>


<?php endif ?>
