<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'genesis', get_template_directory_uri() . '/style.css' );//(name of parent theme, directory of style)

}
?>