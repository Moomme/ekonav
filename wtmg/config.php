<?php
//Only edit here if you know what you are doing
define('PROD_URL', 'wtmg.se');

define('PHP_VERSION', phpversion());

$cur_url = $_SERVER[HTTP_HOST];
if(constant('PROD_URL') != $cur_url){
  //Site is dev
  define('THEME_ENV_DEV', true);
  define('DEBUG_THEME', false);
}else{
  //Site is prod
  define('THEME_ENV_DEV', false);
  define('DEBUG_THEME', false);
}

if(constant('PHP_VERSION') >= 7){
  //PHP 7.0+ required to use array in define(), if your server has a lower php version, some things
  //needs to be rebuilt.
  define('HIDE_ADMIN_PAGES', array(
    'edit-comments.php',
  ));
  //Hide admin pages from the user
  define('THEME_LANGUAGES', array(
    'sv',
  ));
  //Define theme languages, uppercase-codes for WPML, lowercase fo polylang
  define('REGISTER_NAVS', array(
    'top',
    'bottom1',
    'bottom2',
  ));
  //Register navs in acf
}

 ?>
