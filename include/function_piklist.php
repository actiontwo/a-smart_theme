<?php
add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');

function piklist_theme_setting_pages($pages)
{
  $pages[] = array(
      'page_title' => __('Page Info')
      , 'menu_title' => __('Page Info', 'piklist')
      , 'sub_menu' => 'themes.php' //Under Appearance menu
      , 'capability' => 'manage_options'
      , 'menu_slug' => 'page_info'
      , 'setting' => 'page_info_setting'
      , 'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      , 'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      , 'single_line' => true
//      , 'default_tab' => 'Page Details'
      , 'save_text' => 'Save'
  );

  return $pages;
}
