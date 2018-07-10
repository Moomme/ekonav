<?php
    $value = get_sub_field('type');
    $text = get_sub_field('about_us');
?>
<div class="<?= $value?>">
    <div class="main-inner">
        <div class="about-text">
            <p>
                <?= $text ?>
            </p>
        </div>
        <div class="about-img">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/sigill.png">
        </div>
    </div>
</div>