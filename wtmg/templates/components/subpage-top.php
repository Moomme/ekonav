<?php
    $title = get_sub_field('title');
    $img = get_sub_field('background_image');
?>

<div class="hero-image-div">
    <img class="background-image" src="<?= $img ?>" alt="" style="height:100%">
    <div class="center-text">
        <h1><?= $title ?></h1>
    </div>
</div>