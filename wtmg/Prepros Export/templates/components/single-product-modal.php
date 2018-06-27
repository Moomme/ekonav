<div class="single-product-modal" id="modal-<?= get_the_ID(); ?>">
    <div class="modal-bg" onclick="toggleModal(<?= get_the_ID(); ?>)"></div>
    <div class="modal" id="modal">
        <div class="close" onclick="toggleModal(<?= get_the_ID(); ?>)">
            <div class="bars">
                <div class="bar1">
                </div>
                <div class="bar2">
                </div>
            </div>
        </div>
        <div class="content">
        <div class="image-container">
            <img class="<?= $_SESSION['height'] ?>" src="<?php the_field('image'); ?>" >
        </div>
            <h3><?php the_title(); ?></h3>
            <p><?= get_field('full_text'); ?></p>
            
        </div>
        
    </div>
</div>
