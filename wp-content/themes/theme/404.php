<?php get_header(); ?>
<div class="page404 center">
    <div class="line"></div>
    <div class="line"></div>
<img src="<?= IMG . "404.png" ?>" alt="">
    <div class="center">
        <div class="page404-text">
            <p>Errore 404</p>
            <p>Pagina non trovata</p>
            <p>Puoi tornare a casa</p>
            <a href="<?= home_url() ?>" class="btn">Torna alla pagina principale</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>