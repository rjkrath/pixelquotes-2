<?php
/*
Plugin Name: PixelQuotes 2
Description: Continuation of Pixel Random Quotes and Images by David Belicza
Version: 1.0
Author: rjkrath

Plugin UR***I: http://belicza.com/wordpress/random-quotes-and-images-pixel-plugin/
Descriptio***n: A widget with custom quotes and custom images. They are displayed in Widget at random. It is a translated plugin. You can upload/delete/modify your images and quotes.
Autho***r: david belicza
Author UR***I: http://belicza.com/
Text Domai**n: quote-pixel
*/
$pixel_quote_version = '1.0';

add_action('init', 'enqueue_pixelquote_scripts_styles');

function enqueue_pixelquote_scripts_styles() {
  trigger_error('plugins_url("underscore-min.js", __FILE___ ' . print_r(plugins_url("underscore-min.js", __FILE__), true));
  wp_enqueue_script('underscore-min', plugins_url('underscore-min.js', __FILE__));
  wp_enqueue_style('pixelquote_user_style', plugins_url('style.css', __FILE__));
}

function pixel_get_options(){
  return get_option('pixelquotes_settings');
}
$pixelquotes = pixel_get_options();

require_once( dirname(__FILE__).'/widgets.php' );

require_once( dirname(__FILE__).'/admin.php' );