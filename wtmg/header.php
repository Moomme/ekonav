<html>
  <head>
    <title><?php wp_title(); ?></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div style="width: 0px; height: 0px;" id="top" ></div>
   
    <?= get_component('templates/layout/header'); ?>
<div class="header-fix"></div>
