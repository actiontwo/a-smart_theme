<?php
add_filter('piklist_post_types', 'post_type_accessories');

function post_type_accessories($post_types)
{
  $post_types['phu_kien'] = array(
      'labels' => piklist('post_type_labels', 'Accessories')
      , 'title' => 'Add new accessorie'
      , 'public' => true
      , 'rewrite' => array(
          'slug' => 'phu_kien'
      )
      , 'supports' => array(
          'author'
          , 'revisions'
          , 'title'
          , 'custom-fields'
      )
      , 'hide_meta_box' => array(
          'slug'
          , 'author'
          , 'revisions'
          , 'comments'
          , 'commentstatus'
      )
  );
  return $post_types;
}
add_filter('piklist_taxonomies', 'taxonomies_accessories');

function taxonomies_accessories($taxonomies)
{
  $taxonomies[] = array(
      'post_type' => 'phu_kien'
      , 'name' => 'loai_phu_kien'
      , 'show_admin_column' => true
      , 'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      , 'configuration' => array(
          'hierarchical' => true
          , 'labels' => piklist('taxonomy_labels', 'Type Accessories')
          , 'hide_meta_box' => false
          , 'show_ui' => true
          , 'query_var' => true
          , 'rewrite' => array(
              'slug' => 'loai_phu_kien'
          )
      )
  );
  return $taxonomies;
}
//function bwf_ma_cpt_columns($columns)
//{
//
//  $new_columns = array(
//      'continental' => __('Continentals', _RON_TEXT_DOMAIN)
//  );
//  return array_merge($columns, $new_columns);
//}
//add_filter('manage_bwf_ma_posts_columns', 'bwf_ma_cpt_columns');
//
//function my_manage_bwf_ma_columns($column, $post_id)
//{
//  switch ($column) {
//    case "continental" :
//      $tax = wp_get_post_terms($post_id, 'continental_accessories');
//      echo "<a href='edit.php?post_type=bwf_ma&continental_accessories=".$tax[0]->slug."'>".$tax[0]->name."</a>";
//      break;
//  }
//}
//add_action('manage_bwf_ma_posts_custom_column', 'my_manage_bwf_ma_columns', 10,
//    2);
