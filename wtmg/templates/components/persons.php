<?php
?>
<div class="main-inner">
   
    <div class="grid-3">
        <?php
        while(have_rows('persons')){
            the_row('persons');
        ?>
        <div class="medium-size grid-item">
            <?php echo get_template_part('templates/components/person-card'); ?>
        </div>
        <?php
        }
        ?>
    </div>
</div>