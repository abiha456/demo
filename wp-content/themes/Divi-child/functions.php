<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'font_family', get_stylesheet_directory_uri().'https://fonts.googleapis.com/css2?family=Pacifico&display=swap' );
   wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri().'/style.css' );
  
    
}
