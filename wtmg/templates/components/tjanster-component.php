<?php
$services = get_sub_field('posts');
?>

<div class="main-inner">
    <div class="header-section">
    <h2 class="c-header">
        Ett urval av våra tjänster
    </h2>
    <a class="read-more" href="tjanster/">Visa alla 
<svg width="13px" height="11px" viewBox="0 0 13 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
</svg></a>
    
    </div>
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