<?php

add_action('init', function () {
  remove_action('wp_enqueue_scripts', 'roots_scripts', 100);
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('main', get_template_directory_uri().'/assets/main.min.js');
  wp_enqueue_style('main', get_stylesheet_directory_uri().'/assets/main.min.css');
});


# Emit ie6 stylesheet.
# wp_head with priority 20 - runs after other styles get output
add_action('wp_head', function () {
  ?>
    <!--[if lte IE 6]>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap-ie6.min.css' ?>">
    <![endif]-->
  <?php
}, 20);
