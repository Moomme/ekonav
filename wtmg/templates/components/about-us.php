<?php
    $value = get_sub_field('type');
    $text = get_sub_field('about_us');
?>
<div class="<?= $value?>">
    <div class="about-us-inner">
        <div class="about-text">
            <p>
                <?= $text ?>
            </p>
        </div>
        <div class="about-img">
            <img src="/ekonav/wp-content/themes/wtmg/assets/images/logo-placeholder.png">
        </div>
    </div>
</div>