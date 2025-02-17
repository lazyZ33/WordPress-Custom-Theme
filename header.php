<?php
/**
 * Header template
 *
 * @package Custom Theme
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  
  <?php 
  //wp_body_open() is a new function in WordPress 5.2 that adds backward compatibility for themes that do not support the function.
    if( function_exists( 'wp_body_open' ) ){
        wp_body_open();
    }
  ?>
  <div id="page" class="site"> 
      <header id="masthead" class="site-header" role="banner">
          <?php get_template_part('/template-parts/header/nav'); ?>
        
      </header>
      <div id="content" class="site-content">

      
