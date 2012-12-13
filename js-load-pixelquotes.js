if (!_.isFunction(allPixelQuotes)) {

  var allPixelQuotes = function(quotes, id) {
    var extensions = ['png', 'jpg', 'gif', 'jpeg'];

    var random = Math.floor(Math.random() * quotes.length);
    var chosenQuote = quotes[random];

    var quote = chosenQuote[0];
    var link = chosenQuote[1];
    var author = chosenQuote[2];

    var fullContainer = jQuery('<div>');

    if (_.include(extensions, _.last(quote.split('.')))) {
      var quoteLink = jQuery('<a>', { href: link }).append(jQuery('<img>', { src: quote} ));
      fullContainer = jQuery('<div>', { 'class': "pix_quote_img_container" });

      if (!_.isEmpty(author)) {
        fullContainer.append(
          jQuery('<div>', { 'class': "pix_quote_img_title"}).append(
            jQuery('<div>', { 'class': "pix_left_margin", text: author}))
        );
      }

      fullContainer.append(quoteLink);

    } else {
      var quoteLink = jQuery('<a>', { href: link, text: '"' + quote + '"' });

      fullContainer = jQuery('<p>', { 'class': 'pix_quote_text_container'});
      fullContainer.append(quoteLink);

      if (!_.isEmpty(author)) {
        fullContainer.append(
          jQuery('<p>', { 'class': pix_quote_text_author, text: '- ' + author })
        );
      }
    }

    jQuery('#' + id + ' .widget').append(fullContainer);
  };
}