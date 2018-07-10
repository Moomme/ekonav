<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 24,
    'offset' => 5,
);
$query = new WP_Query($args);

?>
<div class="main-inner">
    <div class="grid-3">
        <?php
        while($query->have_posts()) : $query->the_post();
       ?>
        <div class="medium-size grid-item">
            <?php echo get_template_part('templates/components/news-card'); ?>
        </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>