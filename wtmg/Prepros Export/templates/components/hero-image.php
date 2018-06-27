<?php
$imgurl = get_sub_field('image');
$header = get_sub_field('header');
$fulltext = get_sub_field('text');
$text_position = get_sub_field('text_position');
$color = get_sub_field('text-color');
$fixed = get_sub_field('background_att');
$bg_color = get_sub_field('bg_color');
$diff_img = get_sub_field('diff_img');
$breakpoint = get_sub_field('break');
$imgurl_2 = get_sub_field('image_2');
 ?>

 <?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone ){
    //browser reported as an iPhone/iPod touch -- do something here
    $class = 'ios';
}elseif($iPad){
    //browser reported as an iPad -- do something here
    $class = 'ios';

}else{
  $class = '';
}

?> 
<div class="hero-image <?= $color ?> <?= $class ?>" style="">
  <div class="main-inner">
    <div class="inner <?= $text_position ?> ">
      <h1 class="component-h"><?= $header; ?></h1>
      <p class=""><?= $fulltext; ?></p>
    </div>
  </div>
</div>
<style>
<?= '#component_' . $_SESSION['component_count'] ?> .hero-image{
  background-image: url(<?= $imgurl; ?>);
  background-attachment: <?= $fixed; ?>;
  background-color: <?= $bg_color ?>;
}
</style>
<?php
if($diff_img){
  ?>
  <style>
  @media (max-width: <?= $breakpoint ?>px){
    <?= '#component_' . $_SESSION['component_count'] ?> .hero-image{
      background-image: url(<?= $imgurl_2; ?>);
      background-attachment: <?= $fixed; ?>;
      background-color: <?= $bg_color ?>;
    }
  }
  </style>
  <?php
}
 ?>
