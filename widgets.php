<?php
class pixelquote_widget extends WP_Widget {
	function pixelquote_widget() {
		// Instantiate the parent object
		parent::WP_Widget( false, __('Quote Pixel','quote-pixel') );
	}

	function widget( $args, $instance ) {
		// Widget output
		global $pixel_quote_version;
		$title = __("Don't forget:","quote-pixel");
		$options = get_option("pixelquote_widget");

		if (!is_array( $options )){
			$options = array(
				'title' => $title,
				'version' => $pixel_quote_version
			);
		}
		echo "<div id='" . $this-> id . "'>";
		echo "<aside class=\"widget\">";
		echo "<h3 class=\"widget-title\">" . $options['title'] . "</h3>";

		//Widget Content
		require_once( trailingslashit(dirname(__FILE__)) . 'quotes.php');
		echo pixel_random_quote($this->id);

		echo "</aside>";
    echo "</div>";
	}

	function update($new_instance, $old_instance) {
		//Save widget options
		if (isset($_POST["opt"])){
			$options['title'] = $_POST["opt"];
		}
		update_option("pixelquote_widget", $options);
	}

	function form( $instance ) {
		//Output admin widget options form
		$options = get_option("pixelquote_widget");
		?><input name="opt" id="opt" type="text" value="<?php echo $options['title'] ?>" /><?php
	}
}
//create the widget child
function pixel_register_widget() {
	register_widget( 'pixelquote_widget' );
}
add_action( 'widgets_init', 'pixel_register_widget' );

?>