<?php
  define('WP_USE_THEMES', false);
  add_action('init', 'my_custom_init');
  function my_custom_init() {
      add_post_type_support( 'page', 'excerpt' );
      add_theme_support( 'post-thumbnails' );
  }
?>
