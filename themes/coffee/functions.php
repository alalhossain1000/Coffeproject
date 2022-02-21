<?php




function coffee_pro_theme_suport(){
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    
}
add_action('after_setup_theme','coffee_pro_theme_suport');


// Menu Registration
register_nav_menus(array(
        
            'primary_menu' => "Primary Menu"
       
         ));



function coffee_pro_file_enqueue(){
    wp_enqueue_style('bootstrap',get_theme_file_uri().'/css/bootstrap.css',NULL,'3.0','all');
    wp_enqueue_style('style',get_theme_file_uri().'/css/style.css',NULL,'1.0','all');
    wp_enqueue_style('chocolat',get_theme_file_uri().'/css/chocolat.css',NULL,'1.0','all');
    wp_enqueue_style('main', get_stylesheet_uri());
    
    
    
    
    
    
    wp_enqueue_script('move-top',get_theme_file_uri().'/js/move-top.js',array('jquery'),true,true);
    wp_enqueue_script('easing',get_theme_file_uri().'/js/easing.js',array('jquery'),true,true);
    wp_enqueue_script('modernizr.custom.97074',get_theme_file_uri().'/js/modernizr.custom.97074.js',array('jquery'),true,true);
    wp_enqueue_script('jquery.chocolat',get_theme_file_uri().'/js/jquery.chocolat.js',array('jquery'),true,true);
    wp_enqueue_script('jquery.hoverdir',get_theme_file_uri().'/js/jquery.hoverdir.js',array('jquery'),true,true);
    wp_enqueue_script('jquery.flexisel',get_theme_file_uri().'/js/jquery.flexisel.js',array('jquery'),true,true);
    wp_enqueue_script('main',get_theme_file_uri().'/js/main.js',array('jquery'),true,true);

}
add_action('wp_enqueue_scripts','coffee_pro_file_enqueue');




//Redux Frame Work Connection
include_once('inc/Redux/ReduxCore/framework.php');
include_once('inc/Redux/sample/config.php');















































































