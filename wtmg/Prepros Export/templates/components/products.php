<?php
$header = get_sub_field('header');
$args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
$post_count = $query->post_count;
$settings = get_sub_field('product_settings');
$class = $settings['width'] . ' ' . $settings['height'];
if($settings['height'] == 'tall'){
    $_SESSION['height'] = 'tall';
}

?>

<div class="main">
    <h2 class="component-h"><?= $header ?></h2>
    <div class="main-inner">
        <div class="flex-container">
            <div class="products-container <?= $class ?>">
                <?php
                while($query->have_posts()){
                    $query->the_post();
                    echo get_component('templates/components/single-product');
                }
                wp_reset_query();
                ?>
                
            </div>
        </div>
    </div>
</div>