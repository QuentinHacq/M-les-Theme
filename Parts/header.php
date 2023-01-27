<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
        <?php wp_head() ?>
    </head>
    <body  <?php body_class(); ?>>
    <header>
        <?php 
            wp_nav_menu(array(
                'theme_location'=>'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'moles_header_navigation', // ma classe personnalisée 
            )); 
        ?>
    </header>