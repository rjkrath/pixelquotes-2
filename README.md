PixelQuotes-2
-------------

This is a continuation of Pixel Random Quotes Images by David Belicza (jamijami).

I was having trouble when setting up caching for my pages.  The Pixel widget would
write a random image/quote into the page and this would cause the browser cache
to invalidate the page stored.

This plugin continuation uses JavaScript to choose and display the random image/quote.
An array of images/quotes/links/authors is pulled from the database, encoded
to JSON, and passed to a JavaScript function.  This function randomly chooses an
image/quote and displays it in exactly the same format as the widget did.

It speeds up the page loading now.


Base Plugin URL: http://wordpress.org/extend/plugins/pixel-random-quotes-and-images/

pixelquotes_settings
a:7:{i:0;a:3:{i:0;s:42:"wp-content/uploads/logos/twitter_quote.png";i:1;s:28:"http://www.twitter.com/kobre";i:2;s:0:"";}i:1;a:3:{i:0;s:48:"wp-content/uploads/logos/kobre_channel_quote.png";i:1;s:28:"http://www.kobrechannel.com/";i:2;s:0:"";}i:2;a:3:{i:0;s:43:"wp-content/uploads/logos/facebook_quote.png";i:1;s:35:"https://www.facebook.com/KobreGuide";i:2;s:0:"";}i:3;a:3:{i:0;s:49:"wp-content/uploads/logos/moving_stories_quote.png";i:1;s:5:"topic";i:2;s:0:"";}i:4;a:3:{i:0;s:52:"wp-content/uploads/logos/best_short_videos_quote.png";i:1;s:7:"channel";i:2;s:0:"";}i:5;a:3:{i:0;s:50:"wp-content/uploads/logos/thinking_person_quote.png";i:1;s:11:"got_an_hour";i:2;s:0:"";}i:6;a:3:{i:0;s:50:"wp-content/uploads/logos/online_showcase_quote.png";i:1;s:12:"hall_of_fame";i:2;s:0:"";}}

pixelquote_widget
a:1:{s:5:"title";s:0:"";}

widget_pixelquote_widget
a:2:{i:2;N;s:12:"_multiwidget";i:1;}

SELECT * FROM `wp_options` where option_name like '%pixel%'