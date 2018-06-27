<?php
$settings = get_sub_field('product_settings');
$class = $settings['width'] . ' ' . $settings['height'];

?>
<div class="product <?= $class ?>">
    <div class="image-container">
        <img src="<?php the_field('image'); ?>" >
    </div>
    <div class="product-info">
        <h3><?php the_title(); ?></h3>
        <p class="<?php if($settings['height'] == 'tall'){ echo 'tablet-hide'; } ?>">
            <?php the_field('description'); ?>
        </p>
        <p class="<?php if($settings['height'] == 'tall'){ echo 'desktop-hide'; } ?>">
            <?php the_field('description_mobile'); ?>
        </p>
    </div>
    <div class="price-container">
        <?php if(get_field('show_read_more') == true){
            ?>
            <a class="link" onclick="toggleModal(<?= get_the_ID(); ?>)"><?php _e('Läs mer', 'coloran'); ?>   <svg width="13px" height="11px" viewBox="0 0 13 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square"><g id="Product" transform="translate(-91.000000, -431.000000)" stroke="#000000"><g id="Group"><g id="Group-2" transform="translate(27.000000, 425.000000)"><g id="Group-3" transform="translate(64.000000, 6.000000)"> <path d="M12.5,5.5 L7.40098049,0.400980486" id="Line-2"></path><path d="M12.5990195,10.5 L8.24934944,6.15032992" id="Line-2-Copy" transform="translate(10.049510, 7.950490) scale(-1, 1) translate(-10.049510, -7.950490) "></path><path d="M0.5,5.5 L11.6968099,5.5" id="Line"></path></g></g></g></g></g></svg></a>
            
            <?php
        }
        ?>
    </div>
    
</div>