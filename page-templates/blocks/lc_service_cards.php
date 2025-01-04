<section class="service_cards">
    <div class="container-xl">
        <div class="row justify-content-center g-4">
            <?php
            while (have_rows('cards')) {
                the_row();
                $l = get_sub_field('card_link');
            ?>
                <div class="col-md-6">
                    <div class="service_cards__card">
                        <h2 class="h3 mb-0"><?= get_sub_field('card_title') ?></h2>
                        <div class="mb-2"><?= get_sub_field('card_content') ?></div>
                        <a href="<?= $l['url'] ?>" class="button button-blue"><?= $l['title'] ?></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>