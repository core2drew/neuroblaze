<?php

function neuroblaze_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script('neuroblaze-scripts', get_stylesheet_directory_uri().'/assets/js/main.js', false, filemtime( get_stylesheet_directory().'/assets/js/main.js' ), array( 'jquery' ), true);
    wp_localize_script('neuroblaze-scripts', 'ajaxObject', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action( 'wp_enqueue_scripts', 'neuroblaze_scripts' );