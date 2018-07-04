<?php
    $main_title = get_sub_field('main_title');
    $under_title = get_sub_field('under_title');
    $img = get_sub_field('background_image'); 
?>

<div class="hero-image-div">
    <img class="background-image" src="<?= $img ?>" alt="" style="height:100%">
    <div class="center-text">
        <h1><?= $main_title; ?></h1>
        <h2><?= $under_title; ?></h2>
    </div>
</div>