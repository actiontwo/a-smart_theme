<?php

//Regsiter new sidebar
function bwfcp_register_sidebar_theme()
{
  $sidebars      = array(
      'home-sidebar' => array(
          'name' => 'Home Sidebar',
          'description' => 'Widgets in this area will be shown on Homepage'
      )
  );
  $before_title  = '<div class="widget--title">';
  $after_title   = '</div><div class="widget--content">';
  $before_widget = '<div id="%1$s" class="widget %2$s">';
  $after_widget  = '</div></div>';

  foreach ($sidebars as $idSidebar => $sidebar) {
    register_sidebar(array(
        'name' => __($sidebar['name'], 'theme-slug'),
        'id' => $idSidebar,
        'description' => __($sidebar['description'], 'theme-slug'),
        'before_title' => $before_title,
        'after_title' => $after_title,
        'before_widget' => $before_widget,
        'after_widget' => $after_widget,
    ));
  }
}
add_action('widgets_init', 'bwfcp_register_sidebar_theme');
