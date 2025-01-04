<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="py-5">
    <div class="container-xl">
        <div class="row justify-content-between">
            <div class="col-md-3">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/ascended-healing-logo-500x500.png" alt="Ascended Healing">
            </div>
            <div class="col-md-4">
                <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
            </div>
        </div>
    </div>
</footer>
<div class="colophon py-2">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8">
                &copy; <?= date('Y') ?> Ascended Healing
            </div>
            <div class="col-md-4 text-end">
                <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookies</a> |
                <a href="/terms-and-conditions/">Website Terms</a> |
                Site by <a href="https://www.lamcat.co.uk/" target="_blank">Lamcat</a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>