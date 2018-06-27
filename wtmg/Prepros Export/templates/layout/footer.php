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
                    <img src="client-logo-placeholder.png" alt="LOGO">
                </div>
                <div class="inside-footer-div">
                    <h5>Hem</h5>
                    <ul style="list-style-type:none">
                        <li> <a href="">Tjänster</a> </li>
                        <li> <a href="">Aktuellt</a> </li>
                        <li> <a href="">Kontakt</a> </li>
                        <li> <a href="">Integritetspolicy</a> </li>
                    </ul>
                </div>
                <div class="inside-footer-div">
                    <h5>Tjänster</h5>
                    <ul style="list-style-type:none">
                        <li> <a href="">Bokföring</a> </li>
                        <li> <a href="">Redovisning</a> </li>
                        <li> <a href="">Afffärsutveckling</a> </li>
                        <li> <a href="">Bokslut</a> </li>
                    </ul>
                </div>
                <div class="inside-footer-div">
                    <h5>Kontakta oss</h5>
                    <ul style="list-style-type:none">
                    <li> <a href="">Adress</a> </li>
                    <li> <a href="">Tel</a> </li>
                    <li> <a href="">Mail</a> </li>
                </ul>
                </div>
            </div>
            <div class="col logo-section">
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
        </div>
    </div>
</footer>
