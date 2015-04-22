<?php

add_action( 'init', 'twentyfifteen_disqus' );

function twentyfifteen_disqus() {
  wp_enqueue_style( __FILE__ . '/twentyfifteen-disqus.css' );
}
