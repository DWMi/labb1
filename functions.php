<?php
// "importerar" enqeueu här
include 'enqueue.php';
// lägger till tema-funktioner i WP admin
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' ); 
add_theme_support('widgets');


// registrerar ny navbar och footer
function register_my_menu() {
    register_nav_menu('header', 'header');
    register_nav_menu('sidomeny', 'sidomeny');
    register_nav_menu('footermeny', 'Footermeny');
    register_nav_menu('sidenavbarSidor','sidenavbarSidor');
    register_nav_menu('sidenavbarKat','sidenavbarKat');
}
add_action('after_setup_theme', 'register_my_menu');

// registerar mina sidebars
function register_my_sidebars(){
//  footer👇
register_sidebar(
    [
        'name'=>'kortomoss',
        'id'=>'kort1',
        'description'=>'Kort om oss'
    ]
    );
register_sidebar(
    [
        'name'=>'kontaktuppgifter',
        'id'=>'kon2',
        'description'=>'Kontaktuppgifter'
    ]
    );
register_sidebar(
    [
        'name'=>'socialmedia',
        'id'=>'soc3',
        'description'=>'Social media'
    ]
    );
register_sidebar(
    [
        'name'=>'copyright',
        'id'=>'cop4',
        'description'=>'copyright'
    ]
    );

// sidomeny i bloggen 👇
register_sidebar(
    [
        'name'=>'sidor',
        'id'=>'sid1',
        'description'=>'sidor i sidebar',
    ]
    );
register_sidebar(
    [
        'name'=>'arkiv',
        'id'=>'ark2',
        'description'=>'arkiv i sidebar',
    ]
    );
register_sidebar(
    [
        'name'=>'kategori',
        'id'=>'kat3',
        'description'=>'kategori i sidebar',
    ]
    );
register_sidebar(
    [
        'name'=>'searchform',
        'id'=>'sea4',
        'description'=>'searchform i sidebar',
    ]
    );
};
add_action( 'widgets_init', 'register_my_sidebars' );


?>