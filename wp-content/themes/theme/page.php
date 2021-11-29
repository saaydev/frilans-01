<?php
    global $is_black;
    $is_black = true;
    get_header();
?>
    <div class="page container">
        <h1><?php the_title() ?></h1>
        <div class="content">
            <?php the_content() ?>
        </div>
    </div>
<?php 
    get_footer();
?>