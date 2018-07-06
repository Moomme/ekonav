<?php
$logosrc = get_option_field('logo');

$footer = get_option_field('footer');
?>
<?php
//Generate product modals
$args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
while($query->have_posts()){
    $query->the_post();
    if(get_field('show_read_more') == true){
        echo get_component('templates/components/single-product-modal');
    }
}
wp_reset_query();
?>

<footer>
    <div class="main-inner">
        <div class="flex-container">
            <div class="div-container">
                <div class="inside-footer-div">
                    <img class="footerlogo" src="/ekonav/wp-content/themes/wtmg/assets/images/logo-placeholder.png" alt="LOGO"> </p>
                </div>
                <div class="inside-footer-div">
                    <a href="/ekonav/index.php/hem/"><h5>Hem</h5></a>
                    <ul style="list-style-type:none">
                        <li> <a href="/ekonav/index.php/tjanster/">Tjänster</a> </li>
                        <li> <a href="/ekonav/index.php/aktuellt/">Aktuellt</a> </li>
                        <li> <a href="/ekonav/index.php/kontakt/">Kontakt</a> </li>
                        <li> <a href="/ekonav/index.php/integritetspolicy/">Integritetspolicy</a> </li>
                    </ul>
                </div>
                <div class="inside-footer-div">
                    <a href="/ekonav/index.php/tjanster/"><h5>Tjänster</h5></a>
                    <ul style="list-style-type:none">
                        <li> <a href="/ekonav/index.php/single-tjanst/">Bokföring</a> </li>
                        <li> <a href="/ekonav/index.php/single-tjanst/">Redovisning</a> </li>
                        <li> <a href="/ekonav/index.php/single-tjanst/">Affärsutveckling</a> </li>
                        <li> <a href="/ekonav/index.php/single-tjanst/">Bokslut</a> </li>
                    </ul>
                </div>
                <div class="inside-footer-div">
                    <a href="/ekonav/index.php/kontakt/"><h5>Kontakta Oss</h5></a>  
                    <ul style="list-style-type:none">
                    <li> <a href="">Adress</a> </li>
                    <li> <a href="">Tel</a> </li>
                    <li> <a href="">Mail</a> </li>
                </ul>
                </div>
            </div>
            <?php /*<div class="col logo-section">
                <div class="logo-container">
                    <img class="logo" src="<?= $logosrc?>" alt="Coloran" onclick="logoLink('<?= pll_home_url(); ?>')">
                </div>
                <div class="info">
                    <?= $footer['sub_logo_text'] ?>
                </div>
            </div>
            <div class="col nav-section">
                <?php echo wp_nav(array(
                    'lang' => current_language(),
                    'nav_id' => 'top',
                ));
                ?>
            </div>
            <div class="col contact-section">
                <p class=""><?php _e('Kontakt', 'coloran'); ?></p>
                <?= $footer['contact_text'] ?>
            </div>
            <div class="col contact-section">
                <p class=""><?php _e('Återförsäljare?', 'coloran'); ?></p>

                <?= $footer['reseller_text'] ?>
            </div>
            <div class="copyright">
                <p class="fcol cr"><?= $footer['copyright']; ?></p>
                <p class="fcol owned"><?= $footer['owned']; ?></p>
            </div>
        </div> */?>
    </div>
</footer>