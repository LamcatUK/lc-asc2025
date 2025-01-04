<section class="testimonials">
    <div class="container-xl">
        <?php
        $q = new WP_Query(array(
            'post_type' => 'testimonial',
            'orderby' => 'rand',
            'posts_per_page' => -1
        ));

        while ($q->have_posts()) {
            $q->the_post();
        ?>
            <div class="testimonials__card">
                <div class="testimonials__content">
                    <?= get_the_content() ?>
                </div>
                <div class="testimonials__name">
                    <?= get_the_title() ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>