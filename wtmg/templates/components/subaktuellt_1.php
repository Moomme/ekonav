<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
);
$query = new WP_Query($args);

?>
<div class="main-inner">
    <div class="grid-3">
        <?php
        $first = true;
        while($query->have_posts()) : $query->the_post();
        if($first){
            $first = false;
            ?>
             <div class="medium-size grid-item-large">
            <?php echo get_template_part('templates/components/news-card'); ?>
            </div>
            <?php
        }else{
        ?>
        <div class="medium-size grid-item">
            <?php echo get_template_part('templates/components/news-card'); ?>
        </div>
        <?php

        }
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>