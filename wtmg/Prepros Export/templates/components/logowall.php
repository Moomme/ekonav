<?php
$header = get_sub_field('header');
$subheader = get_sub_field('subheader');
?>
<div class="main-inner">
    <h2 class="component-h h-text"><?= $header ?></h2>
    <p class="component-sub-h"><?= $subheader ?></p>
    <div class="logos-container">
    <?php
    while(have_rows('logos')){
        the_row();
        $link = false;
        if(get_sub_field('href')){
            $link = true;
        }
        ?>
        <div class="logo">
            <?php if($link){
                ?>
                <a class="overlay-link" target="blank" href="<?= get_sub_field('href'); ?>"></a>
                <?php
            }
            ?>
            <img class="logo-img" src="<?= get_sub_field('logo') ?>">
        </div>
        <?php
    }
    ?>
    </div>
   
</div>