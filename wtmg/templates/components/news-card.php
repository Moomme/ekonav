
<div class="news-card">
    <a class="overlay-link" href="<?= the_permalink(); ?>"></a>
    
    <div class="image" style="background-image: url(<?= get_field('image'); ?>);">
    </div>
    <div class="content">
        <label class="date"><?= get_the_date('Y-m-d'); ?></label>
        <h3><?= the_title(); ?></h3>
        <p><?= get_field('teaser_text'); ?></p>
    </div>
</div>
