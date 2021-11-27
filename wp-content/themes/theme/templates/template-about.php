<?php 
    // Template name: About
    get_header();
?>
<div class="about-me">
    <div class="about-me-top container">
        <h1>A proposito di me</h1>
        <div class="about-me-top-grid">
            <img src="<?= IMG . "about-01.png" ?>" alt="">
            <div class="about-me-top-grid-text content">
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <div class="about-me-story container">
        <?php get_template_part("components/story"); ?>
        <button class="btn">Più dettagli</button>
    </div>

    <div class="about-me-full">
        <div class="about-me-full-bg">
            <img src="<?= IMG . "about-bg.png" ?>" alt="">
        </div>
        <div class="about-me-full-content container">
            <h2>Maecenas consequat tortor vitae dapibus molestie.</h2>

            <div class="about-me-full-content-grid">
                <div class="content">
                    Donec convallis, elit quis lacinia rutrum, risus lorem pharetra enim, quis ultricies orci nisl et arcu. Nulla eget molestie arcu. Fusce ac facilisis nisi. Quisque pharetra consequat cursus. Curabitur quis risus et neque sagittis vestibulum id quis ligula. Mauris massa lectus, viverra a ullamcorper sit amet, ullamcorper vitae leo. Morbi pretium ultrices ex. Morbi eget nibh a quam pellentesque semper id ac magna. In hac habitasse platea dictumst.

                    Morbi pretium ultrices ex. Morbi eget nibh a quam pellentesque semper id ac magna. In hac habitasse platea dictumst.

                    Morbi pretium ultrices ex. Morbi eget nibh a quam pellentesque semper id ac magna. In hac habitasse platea dictumst.Morbi pretium ultrices ex. Morbi eget nibh a quam pellentesque semper id ac magna. 
                </div>
                <div class="right">
                    <h3>Donec convallis, elit quis lacinia <br>rutrum:</h3>
                    <?php for($i=0; $i < 5; $i++) : ?>
                    <p>
                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="8.74227e-08" y1="1" x2="15" y2="1" stroke="#2659F6" stroke-width="2"/>
                        </svg>
                        Aenean id erat non ipsum dictum imperdiet
                    </p>

                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>

    <div class="about-me-cert">
        <h2>Certificati</h2>
        <div class="about-me-cert-items container">
            <img src="<?= IMG . "cert.png" ?>" alt="">
            <img src="<?= IMG . "cert.png" ?>" alt="">
            <img src="<?= IMG . "cert.png" ?>" alt="">
        </div>
    </div>

    <div class="about-me-blog">
        <div class="about-me-blog-bg"></div>
        <div class="about-me-blog-content">
            <h2 class="title-h2 center black large">BLOG</h2>
            <div class="bottom center">
                <div class="btn">Leggi tutte le notizie</div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <?php get_template_part("components/form"); ?>
    </div>
</div>
<?php get_footer(); ?>