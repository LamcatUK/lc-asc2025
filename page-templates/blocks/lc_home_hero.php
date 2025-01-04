<section class="home_hero">
    <?= wp_get_attachment_image(get_field('background'), 'full', false, ['class' => 'home_hero__image']) ?>
    <div class="overlay"></div>
    <div class="container-xl">
        <h1 class="d-none">Ascended Healing</h1>
        <img src="<?= get_stylesheet_directory_uri() ?>/img/ascended-healing-logo-500x500.png" class="home_hero__logo" data-aos="fade">
        <?php
        $l = get_field('cta') ?? null;
        if ($l) {
        ?>
            <div data-aos="fade" data-aos-delay="200">
                <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button button-blue"><?= $l['title'] ?></a>
            </div>
        <?php
        }
        ?>
    </div>
</section>