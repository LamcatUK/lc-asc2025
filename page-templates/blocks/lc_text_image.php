<?php
$txtcol = get_field('order') == 'text/image' ? 'order-2 order-lg-1' : 'order-2 order-lg-2';
$imgcol = get_field('order') == 'text/image' ? 'order-1 order-lg-2' : 'order-1 order-lg-1';

$fadeText = get_field('order') == 'text/image' ? 'fade-right' : 'fade-left';
$fadeImage = get_field('order') == 'text/image' ? 'fade-left' : 'fade-right';

$txtcolwidth = get_field('split') == '5050' ? 'col-lg-6' : 'col-lg-8';
$imgcolwidth = get_field('split') == '5050' ? 'col-lg-6' : 'col-lg-4';

$img = wp_get_attachment_image(get_field('image'), 'full', false, array('class' => 'w-75 w-md-50 w-lg-100 mx-auto rounded-1')) ?: '<img src="' . get_stylesheet_directory_uri() . '/img/missing-image.png">';

$anchor = isset($block['anchor']) ? $block['anchor'] : '';
if ($anchor) {
?>
    <a id="<?= $anchor ?>" class="anchor"></a>
<?php
}
?>

<section class="text_image py-5">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <div class="h2 text-center d-lg-none mb-4" data-aos="fade">
                <?= get_field('title') ?>
            </div>
        <?php
        }
        ?>
        <div class="row g-5">
            <div
                class="<?= $txtcolwidth ?> d-flex flex-column justify-content-center align-items-center <?= $txtcol ?>" data-aos="<?= $fadeText ?>">
                <?php
                if (get_field('title') ?? null) {
                ?>
                    <h2 class="d-none d-lg-block mb-4">
                        <?= get_field('title') ?>
                    </h2>
                <?php
                }
                ?>
                <div class="text-center"><?= get_field('content') ?>
                </div>
                <?php
                if (get_field('link') ?? null) {
                    $l = get_field('link');
                    $btn = get_field('link_colour') ?? 'blue';
                ?>
                    <a href="<?= $l['url'] ?>"
                        target="<?= $l['target'] ?>"
                        class="mt-4 button button-<?= $btn ?>"><?= $l['title'] ?></a>
                <?php
                }
                ?>
            </div>
            <div
                class="<?= $imgcolwidth ?> <?= $imgcol ?> d-flex align-items-center" data-aos="<?= $fadeImage ?>">
                <?= $img ?>
            </div>
        </div>
    </div>
</section>