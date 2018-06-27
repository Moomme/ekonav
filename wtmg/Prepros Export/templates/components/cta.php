<?php
$text = get_sub_field('btn_text');
$href = get_sub_field('btn_href');
?>
<div class="cta">
    <div class="button-container">
        <a href="<?= $href ?>" class="button"><?= $text ?></a>
    </div>
</div>