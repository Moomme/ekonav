<?php
//Register wordpress custom post types
function custom_post_type() {

    $labels = array(
        'name'               => _x( 'Tjänster', 'products' ),
        'singular_name'      => _x( 'Tjänst', 'products' ),
        'add_new'            => _x( 'Lägg till ny', 'products' ),
        'add_new_item'       => __( 'Lägg till ny Tjänst' ),
        'edit_item'          => __( 'Redigera Tjänst' ),
        'new_item'           => __( 'Ny Tjänst' ),
        'all_items'          => __( 'Alla Tjänster' ),
        'view_item'          => __( 'Visa Tjänst' ),
        'search_items'       => __( 'Sök Tjänster' ),
        'not_found'          => __( 'Inga Tjänster hittades' ),
        'not_found_in_trash' => __( 'Inga Tjänster finns i Soptunnan' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Tjänster'
      );

      $args = array(
        'labels'        => $labels,
        'description'   => 'Våra Tjänster',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'custom-fields', 'editor'),
        'has_archive'   => true,
      );

    register_post_type( 'service', $args );

    }
    add_action( 'init', 'custom_post_type', 0 );
 ?>
