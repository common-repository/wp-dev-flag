(function ($) {
  'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
  $(window).load(
    function () {

      $('.bg_colour, .text_colour').wpColorPicker();

      var $html = '<li class="' + ((wp_dev_flag_options.custom_class) ? wp_dev_flag_options.custom_class + ' ' : '') + 'wp-dev-flag">' + wp_dev_flag_options.message + '</li>'

      if (!(wp_dev_flag_options.show_flag && wp_dev_flag_options.show_in_admin)) return;

      $('#wp-admin-bar-new-content').after($html)

      $('.wp-dev-flag').css(
        {
          'background': wp_dev_flag_options.bg_colour,
          'color': wp_dev_flag_options.text_colour,
        }
      )

    }
  );

})(jQuery);
