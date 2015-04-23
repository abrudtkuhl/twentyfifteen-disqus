<?php

/**
 * Plugin Name: Twenty Fifteen Disqus Comments Style
 * Plugin URI: https://github.com/abrudtkuhl/twentyfifteen-disqus
 * Description: Makes Disqus look nice in the Twenty Fifteen WordPress Theme
 * Version: 0.2
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 */

if( ! function_exists( 'twentyfifteen_disqus' ) ) {

  function twentyfifteen_disqus() {
    wp_enqueue_style( 'twentyfifteen-disqus', plugins_url( 'twentyfifteen-disqus.css' ), array(), '1.0', 'all' );
  }

  add_action( 'wp_enqueue_scripts', 'twentyfifteen_disqus' );
}
