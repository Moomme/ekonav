<?php
$services = get_sub_field('posts');
?>
<div class="main-inner">
   
    <div class="grid-3">
        <?php
        if(!empty($services)) :
        foreach($services as $post){
            setup_postdata($post);
        ?>
        <div class="medium-size grid-item">
            <?php echo get_template_part('templates/components/service-card'); ?>
        </div>
        <?php
        }
        wp_reset_postdata();
    endif;
        ?>
    </div>
</div>