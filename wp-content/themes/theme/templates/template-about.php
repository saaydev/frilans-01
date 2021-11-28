<?php 
    // Template name: About
    global $body_class;
    $body_class = "black";
    get_header();
?>
<div class="about-me">
    <div class="about-me-top container">
        <h1><?php the_title() ?></h1>
        <div class="about-me-top-grid">
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
            <div class="about-me-top-grid-text content">
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <div class="about-me-story container">
        <?php 
            if(CFS()->get("items")){
                get_template_part("components/story", "", [
                    "items" => CFS()->get('items'),
                    "title" => "Storia del successo"
                ]);
            }
        ?> 
        <button class="btn">Più dettagli</button>
    </div>

    <div class="about-me-full">
        <div class="about-me-full-bg">
            <img src="<?= IMG . "about-bg.png" ?>" alt="">
        </div>
        <div class="about-me-full-content container">
            <h2><?= CFS()->get("title") ?></h2>

            <div class="about-me-full-content-grid">
                <div class="content"><?= CFS()->get("content") ?></div>
                <div class="right">
                    <h3><?= CFS()->get("title-items") ?></h3>
                    <?php if(CFS()->get("content-items")) foreach(CFS()->get("content-items") as $item) : ?>
                    <p>
                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="8.74227e-08" y1="1" x2="15" y2="1" stroke="#2659F6" stroke-width="2"/>
                        </svg>
                        <?= $item["text"] ?>
                    </p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <div class="about-me-cert">
        <h2>Certificati</h2>
        <div class="about-me-cert-items container">
            <?php if(CFS()->get("cert")) foreach(CFS()->get("cert") as $cert) : ?>
            <img src="<?= $cert["url"] ?>" alt="">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="about-me-blog">
        <div class="about-me-blog-bg"></div>
        <div class="about-me-blog-content container">
            <h2 class="title-h2 center black large">BLOG</h2>
            <div class="about-me-blog-content-items">
                <?php 
                    global $wp_query;
                    $wp_query = new WP_Query([
                        "post_type" => "news",
                        "posts_per_page" => 3,
                    ]);
                    while(have_posts()){
                        the_post();
                        get_template_part("components/news", "item");
                    }
                    wp_reset_query();
                ?>
            </div>
            <div class="bottom center">
                <a href="<?= site_url("/news/") ?>" class="btn">Leggi tutte le notizie</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <?php get_template_part("components/form"); ?>
    </div>
</div>
<?php get_footer(); ?>