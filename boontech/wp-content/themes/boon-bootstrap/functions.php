<?php

add_theme_support( 'woocommerce' );

function wpbootstrap_scripts_with_jquery()
{
	
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'jquery-script', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array() );
	wp_enqueue_script( 'unslider-script', get_template_directory_uri() . '/js/unslider.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'fittext-script', get_template_directory_uri() . '/js/jquery.fittext.js', array( 'jquery' ) );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery' ) );
	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

?>
<?php
//Woocommerce breadcrumbs

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><ol class="breadcrumb">',
            'wrap_after'  => '</ol></nav>',
            'before'      => '<li>',
            'after'       => '</li>',
            'home'        => _x( '', 'breadcrumb', 'woocommerce' ),
        );
}

?>
<?php remove_filter ('the_content', 'wpautop'); ?>