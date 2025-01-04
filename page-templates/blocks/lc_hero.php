<section class="hero">
    <div class="container-xl position-relative">
        <?= wp_get_attachment_image(get_field('background'), 'full', false, ['class' => 'hero__image', 'data-aos' => 'fade-down']) ?>
        <div class="overlay"></div>
        <div class="hero__title" data-aos="fade-up">
            <h1 class="mb-0 text-center"><?= get_field('title') ?></h1>
        </div>
    </div>
</section>