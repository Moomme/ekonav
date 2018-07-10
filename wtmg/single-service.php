<?php
get_header();
?>
<div class="main-inner info-page">
    <div class="content-side">
        <?php if(get_field('image')): ?>
    <img class="header-image" src="<?= get_field('image'); ?>" alt="">
<?php endif; ?>
    <div class="content">
        <article class="text">
            <?php
            while(have_posts()) : the_post(); ?>
           <h1><?= the_title(); ?></h1>
           <?= the_content(); ?>
           <?php
           endwhile;
           ?>
        </article>   
    </div>
    </div>
    <div class="sidebar">
        <div class="contact">
            <?php

echo get_component('templates/components/contact-box');

?>
        </div>
        <div class="show-all">
            <h2><a href="tjanster/">Visa alla tjänster <svg width="13px" height="11px" viewBox="0 0 13 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Hem" transform="translate(-680.000000, -576.000000)" fill="#ADCB08">
            <g id="Arrow" transform="translate(680.000000, 576.000000)">
                <path d="M0,4.33333333 L11.7738095,4.33333333 C12.372118,4.33333333 12.8571429,4.81835819 12.8571429,5.41666667 L12.8571429,5.41666667 C12.8571429,6.01497515 12.372118,6.5 11.7738095,6.5 L0,6.5 L0,4.33333333 Z" id="Rectangle-2" transform="translate(6.428571, 5.416667) scale(1, -1) translate(-6.428571, -5.416667) "></path>
                <path d="M6.14167826,2.23238185 L12.1906888,2.23238185 C12.7889972,2.23238185 13.2740221,2.71740671 13.2740221,3.31571519 L13.2740221,3.31571519 C13.2740221,3.91402367 12.7889972,4.39904852 12.1906888,4.39904852 L6.14167826,4.39904852 L6.14167826,2.23238185 Z" id="Rectangle-2-Copy" transform="translate(9.707850, 3.315715) scale(1, -1) rotate(-45.000000) translate(-9.707850, -3.315715) "></path>
                <path d="M6.1411847,6.56692 L12.1935655,6.56692 C12.791874,6.56692 13.2768988,7.05194486 13.2768988,7.65025333 L13.2768988,7.65025333 C13.2768988,8.24856181 12.791874,8.73358667 12.1935655,8.73358667 L6.1411847,8.73358667 L6.1411847,6.56692 Z" id="Rectangle-2-Copy-2" transform="translate(9.709042, 7.650253) scale(1, -1) rotate(45.000000) translate(-9.709042, -7.650253) "></path>
            </g>
        </g>
    </g>
</svg></a></h2>
        </div>
        <div class="small-boxes news">
            <?php
                $currentID = get_the_ID();
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 2,
                    'orderby' => 'rand',
                    'post__not_in' => array($currentID),
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
                    echo get_component('templates/components/small-box');
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
</div>
<?php
if( have_rows('flexible') ):
     // loop through the rows of data
     $_SESSION['component_count'] = 0;
    while ( have_rows('flexible') ) : the_row();
        $layout = get_row_layout();
        ?>
        <div class="<?= $layout ?> component" id="component_<?= $_SESSION['component_count'] ?>">
          <div class="anchor" id="<?= $layout ?>"></div>
          <div class="anchor" id="c-<?= $_SESSION['component_count'] ?>"></div>
        <?= get_component("templates/components/$layout"); ?>
      </div>
      <?php
      $_SESSION['component_count'] = $_SESSION['component_count'] + 1;
      
    endwhile;

else :

  $_SESSION['error'][] = 'No flexible layouts found';



endif;

?>
<?php
get_footer();
?>