<div class="small-box" style="background-image: url(<?= get_field('image'); ?>)">
    <a href="<?= the_permalink(); ?>" class="overlay-link"></a>
    <div class="content">
        <div class="date">
            <?= get_the_date('Y-m-d'); ?>
        </div>
        <h3 class="title">
            <?= the_title(); ?>
        </h3>
    </div>
</div>