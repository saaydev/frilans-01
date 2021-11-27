<?php 
    // Template name: Articolo
    get_header();
?>
<div class="articolo">
    <div class="articolo-top">
        <div class="container">
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
        </div>
        <img src="<?= IMG . "articolo-bg.png" ?>" alt="" class="bg">
    </div>

    <div class="articolo-content container content">
        <div class="date">05.10.2021</div>
        <?php the_content() ?>
        <div class="nav">

            <a href="#" class="left">
                <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3L5 5.88675L5 0.113247L0 3ZM20 2.5L4.5 2.5L4.5 3.5L20 3.5L20 2.5Z" fill="#646464"/>
                </svg>
                Notizie precedenti
            </a>
          
            <a href="#">
                Prossima notizia
                <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3L15 0.113246L15 5.88675L20 3ZM8.74228e-08 3.5L15.5 3.5L15.5 2.5L-8.74228e-08 2.5L8.74228e-08 3.5Z" fill="white"/>
                </svg>
            </a>
        </div>
       
    </div>

    <div class="articolo-news container">
        <h2>notizia</h2>
    </div>
    <div class="container">
        <?php get_template_part("components/form"); ?>
    </div>
</div>
<?php get_footer(); ?>