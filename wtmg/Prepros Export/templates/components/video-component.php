<?php
$header = get_sub_field('header');
$text = get_sub_field('text');
$video_url = get_sub_field('video_url');
?>
<div class="main-inner">
<h2 class="component-h h-text"><?= $header ?></h2>
    <p class="component-sub-h"><?= $text ?></p>
    <div class="video-container">
        <iframe src="<?= $video_url ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>      
    </div>
</div>