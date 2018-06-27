<?php
$imgwidth = get_sub_field('width');
$images = array();
while(have_rows('images')) : the_row();
$images[] = get_sub_field('image');
endwhile;

 ?>
<div class="main">
  <div class="main-inner">
    <?php
      foreach($images as $image){
        ?>
        <div class="image">
          <img src="<?= $image ?>" />
        </div>
        <?php
      }
     ?>
  </div>
</div>
<div class="clearfix"></div>
<style>
<?= '#component_' . $_SESSION['component_count'] ?> .image{
  width: <?= $imgwidth ?>px;
}
@media (max-width: <?= $imgwidth * 2 ?>px){
  <?= '#component_' . $_SESSION['component_count'] ?> .image{
    width: 100%;
  }
}
</style>
