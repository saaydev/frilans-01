<div class="story">
    <div class="container">
        <h2 class="story-title"><?= $args["title"] ?></h2>
    </div>
    <div class="story-blocks">

        <?php foreach($args["items"] as $item) : ?>
            <div id="story-item1" class="story-item">
                <h3><?= $item["year"] ?></h3>
                <h5><?= $item["title"] ?></h3>
                <p><?= $item["text"] ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</div>	
