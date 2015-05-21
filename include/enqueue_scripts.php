<?php

function themeslug_enqueue_script()
{
  // Add script js to footer
  $scripts = array(
      array(
          'id' => 'jquery',
          'src' => "//code.jquery.com/jquery-1.11.2.min.js",
          'in_footer' => true),
      array(
          'id' => 'bxslider',
          'src' => JS."lib/jquery.bxslider.min.js",
          'in_footer' => true),
      array(
          'id' => 'bootstrap',
          'src' => BOOTSTRAP."js/bootstrap.min.js",
          'in_footer' => true),
      array(
          'id' => 'script',
          'src' => JS."script.js",
          'in_footer' => true),
  );

  foreach ($scripts as $script) {
    wp_enqueue_script($script['id'], $script['src'], array(), null,
        $script['in_footer']);
  }
  // Add style  js to header
  $styles = array(
      array(
          'id' => 'bootstrap',
          'src' => BOOTSTRAP."css/bootstrap.min.css",
          'in_footer' => false),
      array(
          'id' => 'bootstrap-theme',
          'src' => BOOTSTRAP."css/bootstrap-theme.min.css",
          'in_footer' => false),
      array(
          'id' => 'normalize-',
          'src' => "https://necolas.github.io/normalize.css/3.0.2/normalize.css",
          'in_footer' => false),
      array(
          'id' => 'bxslider',
          'src' => CSS."lib/jquery.bxslider.css",
          'in_footer' => false),
      array(
          'id' => 'widgets',
          'src' => CSS."style.css",
          'in_footer' => false)
  );

  foreach ($styles as $style) {
    wp_enqueue_style($style['id'], $style['src'], array(), null,
        $style['in_footer']);
  }
}
add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');
