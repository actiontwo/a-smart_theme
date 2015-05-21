<?php
$includes = array(
    'include/url_define.php',
    'include/enqueue_scripts.php',
    'include/post_thumbnail.php',
    'include/menu.php',
    'include/walker_nav_menu.php',
    'include/shortcode.php',
    'include/theme_options.php',
    'include/function_piklist.php',
    'include/sidebar-reg.php',
    'post_types/products.php',
    'post_types/accessories.php',
//  'widget/example.php'
);

foreach ($includes as $include) {
  require_once($include);
}

function debug($data)
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function get_url_img($id, $size = '200x200')
{
  $url = wp_get_attachment_url(get_post_thumbnail_id($id));
  if (!$url) {
    $url = "http://placehold.it/$size";
  }
  return $url;
}