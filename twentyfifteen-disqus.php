<?php

/**
 * Plugin Name: Gravity Forms Bootstrap 3 Style
 * Plugin URI: https://github.com/abrudtkuhl/WordPress-Bootstrap-Gravity-Forms
 * Description: Use Bootstrap 3 form styles with Gravity Forms
 * Version: 0.1
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 */

if( ! function_exists( 'twentyfifteen_disqus' ) ) {

  function twentyfifteen_disqus() {
    wp_enqueue_style( 'twentyfifteen-disqus', plugins_url( 'gravity-forms-bootstrap.css' ), array(), '1.0', 'all' );
  }

  add_action( 'wp_enqueue_scripts', 'twentyfifteen_disqus' );
}
