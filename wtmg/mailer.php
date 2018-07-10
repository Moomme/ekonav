
<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$name = sanitize_text_field( $_POST['name'] );
$email = sanitize_text_field( $_POST['email'] );
$phone = sanitize_text_field( $_POST['phone'] );

$to = 'rahlenjakob@gmail.com';
$subject = 'Kontaktformulär Ekonominavigation';
$body = '' . $name .' har fyllt i ett kontaktformulär på Ekonominavigation.se. Kontakta hen via Email: ' . $email . ' eller via Telefon: '.$phone;

$headers = array('Content-Type: text/html; charset=UTF-8');
$return = wp_mail( $to, $subject, $body, $headers );

$redirect = $_SERVER['HTTP_REFERER'];

if($return == true){
    $redirect = $redirect . '?sent=sent';
}else{
    $redirect = $redirect . '?sent=not';

}
wp_redirect($redirect);

?>
