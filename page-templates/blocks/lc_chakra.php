<section class="chakra">
    <div class="container-xl">
        <div class="row g-4">
            <?php
            while (have_rows('chakra')) {
                the_row();
            ?>
                <div class="col-md-2 text-center">
                    <?= wp_get_attachment_image(get_sub_field('image'), 'full', false) ?>
                </div>
                <div class="col-md-10 align-content-center">
                    <h3 class="nocruft"><?= get_sub_field('title') ?></h3>
                    <div><?= get_sub_field('content') ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>