<?php 
    global $body_class;
    $body_class = "black";
    get_header();
?>
<div class="articolo">
    <div class="articolo-top">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
        <img src="<?= IMG . "articolo-bg.png" ?>" alt="" class="bg">
    </div>

    <div class="articolo-content container content">
        <div class="date"><?= get_the_date() ?></div>
        <?php the_content() ?>
        <div class="nav">
            <?php 
                $previos_post = get_previous_post();
                if(!empty($previos_post)) : 
            ?>
                <a href="<?= get_permalink($previos_post) ?>" class="left">
                    <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 3L5 5.88675L5 0.113247L0 3ZM20 2.5L4.5 2.5L4.5 3.5L20 3.5L20 2.5Z" fill="#646464"/>
                    </svg>
                    Notizie precedenti
                </a>
            <?php else : echo "<div></div>" ?>
            <?php endif ?>

            <?php
                $next_post = get_next_post();
                if(!empty($next_post)): 
            ?>
                <a href="<?= get_permalink($next_post) ?>">
                    Prossima notizia
                    <svg width="20" height="6" viewBox="0 0 20 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3L15 0.113246L15 5.88675L20 3ZM8.74228e-08 3.5L15.5 3.5L15.5 2.5L-8.74228e-08 2.5L8.74228e-08 3.5Z" fill="white"/>
                    </svg>
                </a>
            <?php else : echo "<div></div>" ?>
            <?php endif ?>
        </div>
       
    </div>

    <div class="articolo-news container">
        <h2 class="articolo-news-title">notizia</h2>
        <div class="articolo-news-items">
            <?php
                global $wp_query;
                $wp_query = new WP_Query([
                    "post__not_in" => [get_the_ID()],
                    "post_type" => get_post_type(),
                    "posts_per_page" => 4,
                ]);
                while(have_posts()){
                    the_post();
                    get_template_part("components/news", "item");
                }
                wp_reset_query();
            ?>
        </div>
    </div>
    <div class="container">
        <?php get_template_part("components/form"); ?>
    </div>
</div>
<?php get_footer(); ?>