<?php
$l = get_field('link');
?>
<div class="py-4 text-center">
    <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button button-blue"><?= $l['title'] ?></a>
</div>