<?php 
get_header(); 
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
                    foreach($terms as $term){
                        printf('<a href="%s" class="term">%s</a>', get_term_link($term), $term->name);
                    }
                ?>
            </div>
            <?php 
                global $wp_query;
                $wp_query = new WP_Query([
                    "post_type" => "news",
                    "posts_per_page" => 11,
                ]);
                
                while(have_posts()){
                    the_post();
                    get_template_part("components/news", "item");
                }
               
            ?>
        </div>
        <div class="center">
            <button class="btn">Mostra di più</button>
        </div>
    </div>
<?php 
    get_footer(); 
    wp_reset_query(); 
?>