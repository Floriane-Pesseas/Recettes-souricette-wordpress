<?php

//ENQUEUE
if (!function_exists('betecommetou_enqueue')) {
//Prepare stylesheet
function recettes_souricette_enqueue() {

    wp_enqueue_style(
        'theme-css', 
        get_theme_file_uri('public/css/style.css'),
        [],
        '20200811', 
        'all'
    );

    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('public/js/app.js'),
        [],
        '20200811', 
        true);
 }
}
//Function on the hook (add_action ('name of the hook', 'name of the function'))
add_action('wp_enqueue_scripts', 'recettes_souricette_enqueue');




//Title and post thumbnail

// "if" for security when we use childtheme, to verify that the function doesn't exist
if(!function_exists ('recettes_souricette_setup')) {

//Add Features on the theme
function recettes_souricette_setup(){

//Let wordpress manage the title tag
add_theme_support('title-tag');

//Pictures featured on articles
add_theme_support('post-thumbnails');
}

}
//Function on the hook
add_action('after_setup_theme', 'recettes_souricette_setup');



//Menus
register_nav_menus(
    ['main'=> 'menu principal']
);