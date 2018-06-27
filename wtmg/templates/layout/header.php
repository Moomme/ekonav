<?php
$logosrc = get_option_field('logo');
?>
<header class="ekonav">
    <div class="inner">
        <div class="home-img">
            <a href="/ekonav">
                <p> <img class="logo" src="/ekonav/wp-content/themes/wtmg/assets/images/logo-placeholder.png" alt="LOGO"> </p>
            </a>
        </div>
    <!--<svg onclick="logoLink('<?php /* pll_home_url(); */ ?>')" class="logo" id="" data-name="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227 63.67"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd;}</style></defs><title>Coloran Logo</title><path class="cls-1" d="M47.76,3.9H45.41L43.93,7.38A19.12,19.12,0,0,0,30.37,2.46C14.9,2.46,2.3,16.3,2.3,33.27,2.3,49.82,14,62,30.11,62c5.48,0,9.22-1.53,13.47-5.52L46,60.52h2.26l.78-15.79H46.71c-3,9.51-9,14.94-16.86,14.94-6.17,0-10.17-3.23-11.91-9.68-1-3.22-1.13-6-1.13-14.85,0-15.11.61-20.2,2.78-24.11C22,6.87,25.94,4.75,31.24,4.75,39.06,4.75,44,9.34,46.1,18.67h2.26Z"/><path class="cls-1" d="M66.19,27.79c-9.06,0-16,7.23-16,16.66s6.92,16.7,16,16.7,15.94-7.23,15.94-16.7S75.21,27.79,66.19,27.79m0,1.28c6,0,7.81,3.57,7.81,15.38s-1.81,15.42-7.81,15.42-7.84-3.57-7.84-15.38,1.8-15.42,7.84-15.42"/><path class="cls-1" d="M84.51,59.16h-3.9v1.18h24.81l.92-10h-1.26c-1.51,6.09-4.54,8.81-9.8,8.81h-4V29.79h3.9V28.6H80.61v1.19h3.9Z"/><path class="cls-1" d="M121.8,27.79c-9.07,0-16,7.23-16,16.66s6.92,16.7,16,16.7,15.93-7.23,15.93-16.7-6.92-16.66-15.93-16.66m0,1.28c6,0,7.79,3.57,7.79,15.38s-1.8,15.42-7.79,15.42S114,56.3,114,44.49s1.8-15.42,7.85-15.42"/><path class="cls-1" d="M139.13,59.16h-3.9v1.18h14.62V59.16H146V44h2.67c4.1,0,5.17,1.38,5.51,7.19.2,3.52.39,4.52,1.13,6q1.6,3.28,5.84,3.29a15.16,15.16,0,0,0,5.32-1V58.25a7.7,7.7,0,0,1-2.34.52c-1.61,0-2.39-1.09-2.39-3.38a13.76,13.76,0,0,1,.05-1.43V53c0-4.95-3.46-8.62-9-9.52,3.46-.19,4.29-.34,5.8-1.14a7.09,7.09,0,0,0,3.85-6.43,6.47,6.47,0,0,0-2.58-5.28c-2-1.58-4.15-2-10.29-2H135.23v1.19h3.9ZM146,42.83v-13h3.6c4.78,0,5.95,1.19,5.95,6,0,5.57-1.22,7-5.95,7Z"/><path class="cls-1" d="M181.87,51.82l2.63,7.34h-4.2v1.18h14.58V59.16h-3.46L180.3,28.6h-1.56L168.56,56.44c-1,2.62-1.08,2.72-3.41,2.72h-1.66v1.18h10V59.16H171c-1.27,0-1.66-.15-1.66-.72a5.18,5.18,0,0,1,.39-1.28l1.95-5.34m9.75-1.18h-9.31L176.7,38Z"/><path class="cls-1" d="M219.68,60.68h1.12V33.21c0-3.14.2-3.42,2.64-3.42h1.26V28.6h-9.26v1.19h1.27c2.44,0,2.63.23,2.63,3.42V48.87L203.74,28.6H193.22v1.19h1.26c2.44,0,2.64.23,2.64,3.42V55.73c0,3.19-.2,3.43-2.64,3.43h-1.26v1.18h9.89V59.16h-1.9c-2.44,0-2.63-.29-2.63-3.43V32.5Z"/></svg>-->
        <div class="desktop-nav">
            <?php echo wp_nav(array(
                            'lang' => current_language(),
                            'nav_id' => 'top',
                        ));
                        ?>
        </div>
        <div class="mobile-nav-open" onclick="toggleNav()">
            <div class="bars">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>


        </div>
    </div>

</header>
<div class="mobile-nav">
    <div class="main-inner">
<?php echo wp_nav(array(
                'lang' => current_language(),
                'nav_id' => 'top',
                'onclick' => 'closeNav()',
            ));
            ?>
    </div>
</div>