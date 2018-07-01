<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Draco
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href=<?php echo get_stylesheet_directory_uri() . "/assets/images/torch.ico" ?> type="image/ico" sizes="16x16">
<link href=<?php echo get_stylesheet_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css" ?> rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	if(is_single()) {
		get_template_part( 'template-parts/navigation/navigation', 'top-single' );
	} else {
		get_template_part( 'template-parts/navigation/navigation', 'contact' ) ;
		get_template_part( 'template-parts/navigation/navigation', 'top' );
		get_template_part( 'template-parts/navigation/navigation', 'top-fixed' );
	}
?>
