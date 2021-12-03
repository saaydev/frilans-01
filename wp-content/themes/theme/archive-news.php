<?php 
    get_header(); 
    $posts_per_page = 11;
    $count = 0;
?>
    <div class="page container">
        <h1>notizia</h1>
        <div class="news">
            <div class="news-terms">
                <?php 
                   
                    $terms = get_terms([
                        "taxonomy" => "news_cat",
                        "hide_empty" => false,
                    ]);

                    printf('<a href="%s" class="term %s">%s</a>', 
                        site_url("/news/"), 
                        !is_tax() ? "active" : "",
                        "Tutti",
                    );

                    foreach($terms as $term){
                        printf('<a href="%s" class="term %s">%s</a>', 
                        get_term_link($term), 
                        get_queried_object_id() == $term->term_id ? "active" : "",
                        $term->name);
                    }
                ?>
            </div>
            <?php 
                global $wp_query;
                if(is_tax()){
                    $wp_query = new WP_Query([
                        "post_type" => "news",
                        "posts_per_page" => $posts_per_page,
                        "tax_query" => [
                            [
                                "taxonomy" => "news_cat",
                                "field" => "id",
                                "terms" => get_queried_object_id(),
                            ]
                        ]
                    ]);
                }
                else{
                    $wp_query = new WP_Query([
                        "post_type" => "news",
                        "posts_per_page" => $posts_per_page,
                    ]);
                }
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part("components/news", "item");
                        $count++;
                    }
                }
                else{
                    echo "<p>" . "Empty..." . "<p>";
                }
                
                wp_reset_query();
            ?>
        </div>
        <div class="center">
            <?php if($count == $posts_per_page) : ?>
            <a 
                class="btn pagination_news" 
                tax-id="<?= is_tax() ? get_queried_object_id() : null ?>" 
                text-load="Carico..." 
                post-type="news"
                taxonomy="news_cat"
            >Mostra di più</a>
            <?php endif; ?>
        </div>
    </div>
<?php 
    get_footer(); 
    wp_reset_query(); 
?>