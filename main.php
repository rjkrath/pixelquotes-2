<?php
/*
Plugin Name: Pixel Random Quotes and Images Part 2
Version: 1.0
Plugin UR***I: http://belicza.com/wordpress/random-quotes-and-images-pixel-plugin/
Descriptio***n: A widget with custom quotes and custom images. They are displayed in Widget at random. It is a translated plugin. You can upload/delete/modify your images and quotes.
Autho***r: david belicza
Author UR***I: http://belicza.com/
Text Domai**n: quote-pixel
*/
$pixel_quote_version = '1.0';

add_action( 'admin_init' , 'regsz' );

function regsz(){
  load_plugin_textdomain( 'quote-pixel', false, '/pixel-random-quotes-and-images/languages/' );
}

add_action('init', 'enqueue_pixelquote_scripts_styles');

function enqueue_pixelquote_scripts_styles() {
  wp_enqueue_script('underscore-min', plugins_url('underscore-min.js', __FILE__));

  wp_enqueue_style('pixelquote_user_style',
    plugins_url('pixel-random-quotes-and-images/style.css', dirname(__FILE__)),
    array(), '1.2', 'all');
}

function pixel_get_options(){
  return get_option('pixelquotes_settings');
}
$pixelquotes = pixel_get_options();

require_once( dirname(__FILE__).'/widgets.php' );

require_once( dirname(__FILE__).'/admin.php' );