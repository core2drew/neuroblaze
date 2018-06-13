<?php

/* Add settings to css */
function draco_custom_css_output() {
  

  /* custom header */

  $header_image="";

	if (is_front_page()) {
    if(!$header_image=wp_get_attachment_url(get_theme_mod( 'header_image'))) $header_image=get_template_directory_uri().'/assets/img/header.jpeg';
  }
	else if(is_single() || is_page()) {
		if ( has_post_thumbnail() ) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
			if ( ! empty( $large_image_url[0] ) ) $header_image=$large_image_url[0];
		}
    else if(is_single()) {
      if(!$header_image=wp_get_attachment_url(get_theme_mod( 'single_image'))) $header_image=get_template_directory_uri().'/assets/img/single.jpeg';
    }
    else if(is_page()) {
      if(!$header_image=wp_get_attachment_url(get_theme_mod( 'page_image'))) $header_image=get_template_directory_uri().'/assets/img/page.jpeg';
    }
	}
  else if(is_archive()) {
    if(!$header_image=wp_get_attachment_url(get_theme_mod( 'archive_image'))) $header_image=get_template_directory_uri().'/assets/img/archive.jpeg';
  }
  else if(is_search()) {
    if(!$header_image=wp_get_attachment_url(get_theme_mod( 'search_image'))) $header_image=get_template_directory_uri().'/assets/img/search.jpeg';
  }
  else if(is_404()) {
    $header_image=get_template_directory_uri().'/assets/img/404.jpeg';
  }
}
add_action( 'wp_head', 'draco_custom_css_output');