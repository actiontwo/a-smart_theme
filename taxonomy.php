<?php get_header(); ?>

<br>

<div class='container'>
  <div class="row">
    <div class='col-md-3'>
      <aside class='sidebar'>
        <?php dynamic_sidebar('home-sidebar'); ?>
      </aside>
    </div>
    <div class='col-md-9'>
      <section class='main-content'>
          <?php
          $currentTaxonomy = get_queried_object();
//          var_dump($currentTaxonomy);
          $currentPostType =array('phu_kien','sua_chua');// get_post_type($post->ID);
          $args            = array(
              'orderby' => 'name',
              'order' => 'DESC',
              'hide_empty' => false,
              'hierarchical' => true,
              'child_of' => $currentTaxonomy->term_id,
              'pad_counts' => false,
          );
//          echo $currentPostType;
          $terms = get_terms($currentTaxonomy->taxonomy, $args);
          if (empty($terms)) {

            piklist('module/products-template',
                array('data' =>
                array(
                    'title' => $currentTaxonomy->name,
                    'type' => $currentPostType,
                    'url' => '',
                    'tax_query' =>
                    array(
                        array(
                            'taxonomy' => $currentTaxonomy->taxonomy,
                            'field' => 'slug',
                            'terms' => array($currentTaxonomy->slug)
                        ))
                ))
            );

          } else {

            foreach ($terms as $term) {

              piklist('module/products-template',
                  array('data' =>
                  array(
                      'title' => $term->name,
                      'type' => $currentPostType,
                      'url' => home_url().'/'.$currentTaxonomy->taxonomy.'/'.$term->slug,
                      'tax_query' =>
                      array(
                          array(
                              'taxonomy' => $currentTaxonomy->taxonomy,
                              'field' => 'slug',
                              'terms' => array($term->slug)
                          ))
                  ))
              );
            }
          }
          ?>
      </section>
    </div>
  </div>
</div>

</div>

<?php
get_footer();
