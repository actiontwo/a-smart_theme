<?php
add_filter('piklist_post_types', 'post_type_products');

function post_type_products($post_types)
{
  $post_types['sua_chua'] = array(
      'labels' => piklist('post_type_labels', 'Product')
      , 'title' => 'Add new product'
      , 'public' => true
      , 'rewrite' => array(
          'slug' => 'sua_chua'
      )
      , 'supports' => array(
          'author'
//          , 'revisions'
          , 'title'
//          , 'custom-fields'
          , 'editor'
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
add_filter('piklist_taxonomies', 'taxonomies_products');

function taxonomies_products($taxonomies)
{
  $taxonomies[] = array(
      'post_type' => 'sua_chua'
      , 'name' => 'loai_sua_chua'
      , 'show_admin_column' => true
      , 'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      , 'configuration' => array(
          'hierarchical' => true
          , 'labels' => piklist('taxonomy_labels', 'Type Products')
          , 'hide_meta_box' => false
          , 'show_ui' => true
          , 'query_var' => true
          , 'rewrite' => array(
              'slug' => 'loai_sua_chua'
          )
      )
  );
  return $taxonomies;
}
function sua_chua_cpt_columns($columns)
{

  $new_columns = array(
      'loai_sua_chua' => __('Type Products', _RON_TEXT_DOMAIN)
  );
  return array_merge($columns, $new_columns);
}
add_filter('manage_sua_chua_posts_columns', 'sua_chua_cpt_columns');

function my_manage_sua_chua_columns($column, $post_id)
{
  switch ($column) {
    case "loai_sua_chua" :
      $tax = wp_get_post_terms($post_id, 'loai_sua_chua');
      echo "<a href='edit.php?post_type=sua_chua&loai_sua_chua=".$tax[0]->slug."'>".$tax[0]->name."</a>";
      break;
  }
}
add_action('manage_sua_chua_posts_custom_column', 'my_manage_sua_chua_columns', 10,
    2);
