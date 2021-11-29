<?php
    // Template name: Gallery
    get_header();
?>
    <div class="page container">
        <h1><?php the_title() ?></h1>
            <div class="gallery">

                <?php if(CFS()->get("items")) foreach(CFS()->get("items") as $key => $item) : ?>
                    <div class="gallery-item <?= $key < 10  ? "" : "hidden" ?>">
                        <img src="<?= $item["item"] ?>" alt="">
                    </div>
                <?php endforeach ?>

            </div>

            <div class="gallery-mobile">

                <?php if(CFS()->get("items")) foreach(CFS()->get("items") as $key => $item) : ?>
                    <div class="gallery-mobile-item <?= $key < 10  ? "" : "hidden" ?>">
                        <img src="<?= $item["item"] ?>" alt="">
                    </div>
                <?php endforeach ?>

            </div>
        <div class="center">
            <button class="btn gallery-show">Mostra di più</button>
        </div>
    </div>
<?php 
    get_footer(); 
?>