<?php
    $text = get_sub_field('text');
    $btn_text = get_sub_field('btn_text');
    $img = get_sub_field('background_image'); 
    $link = get_sub_field('btn_link')
?>

<div class="info-inner">
    <img class="background-image" src="<?= $img ?>" alt="" style="width:100%">
    <div class="center-text">
        <h2><?= $text ?></h2>
        <a class="button" href="/ekonav/index.php/<?= $link?>/"><?= $btn_text ?></a>
    </div>
</div>