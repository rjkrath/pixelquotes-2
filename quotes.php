<?php

function pixel_random_quote($widget_id){
	global $pixelquotes;

  return '<script type="text/javascript" src="' . plugin_dir_url(__FILE__) . 'js-load-pixelquotes.js' . '"></script>' .
    '<script type="text/javascript">allPixelQuotes(' . json_encode($pixelquotes). ', "'. $widget_id .'");</script>';
}