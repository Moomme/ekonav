<?php
$imgsource = get_sub_field('image');
$imgcontent = '<img src="'.$imgsource.'">';
$textcontent = get_sub_field('text');

$imgLeft = get_sub_field('imgl');
if(get_sub_field('imgl')){
    $contentLeft = $imgcontent;
    $contentRight = $textcontent;
}else{
    $contentLeft = $textcontent;
    $contentRight = $imgcontent;
}
?>
<div class="main">
    <div class="main-inner">
        <div class="flex-container">
        <div class="left <?php 
        if($imgLeft){
            echo 'img';
        } ?>">
            <?= $contentLeft ?>
            <?php
            if(!$imgLeft){
                echo get_component('templates/components/cta'); 
            }
            ?>
        </div>
        <div class="right <?php 
        if(!$imgLeft){
            echo 'img';
        } ?>">
            <?= $contentRight ?>
            
            <?php
            if($imgLeft){
                echo get_component('templates/components/cta'); 
            }
            ?>
        </div>
        </div>   
    </div>
</div>