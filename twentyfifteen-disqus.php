<?php

add_action( 'wp_enqueue_scripts', 'twentyfifteen_disqus' );

function twentyfifteen_disqus() {
  wp_enqueue_style( __FILE__ . '/twentyfifteen-disqus.css' );
}
