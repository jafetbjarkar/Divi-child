<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function mycustom_featured_width( ) { return 100; /* Custom featured post image width */ }
add_filter( 'et_pb_blog_image_width', 'mycustom_featured_width');

function mycustom_featured_height( ) { return 100; /* Custom featured post image height */ }
add_filter( 'et_pb_blog_image_height', 'mycustom_featured_height');

function mycustom_featured_size( $image_sizes ) {
$custom_size = mycustom_featured_width() . 'x' . mycustom_featured_height();
$image_sizes[$custom_size] = 'et-pb-post-main-image-thumbnail';
return $image_sizes;
}
add_filter( 'et_theme_image_sizes', 'mycustom_featured_size' );


?>
