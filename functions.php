<?php

// Chargement des ressources
function molestheme_register_assets() {

    // Déclarer le JS
    wp_enqueue_script( 
        'MôlesThemeV.1', 
        get_template_directory_uri(), 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'MôlesThemeV.1',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}

add_action( 'wp_enqueue_scripts', 'molestheme_register_assets' );

    //Création des emplacements des menus
    register_nav_menus(array(
        'main'=>'Menu Principal',
        'footer'=>'Bas de page)',
    ));