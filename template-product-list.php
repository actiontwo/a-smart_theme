<?php
/* 
 * Template Name:  Products List
 */
?>

<?php get_header() ?>

<?php while (have_posts()):the_post(); ?>

  <div class="wrapper_content">
    <div class="container">
      <div class="row">
        <div class='col-md-3'>
          <aside class='sidebar'>
            <?php dynamic_sidebar('home-sidebar'); ?>
          </aside>
        </div>
        <div class='col-md-9'>
          <section class='main-content'>
            <?php wp_reset_query(); ?>
<!--            <h3>--><?php //the_title() ?><!--</h3>-->
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"> <?php the_title() ?></h3>
              </div>
            </div>
            <div class="row">
              <?php
              $page_detail = get_queried_object();
              if ($page_detail->post_name  =='danh-muc-sua-chua'){
                $post_type = 'sua_chua';
              }else
              {
                $post_type='phu_kien';
              };
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $query_param = array(
                'post_type' => $post_type,
                'posts_per_page' => 16,
                'paged' => $paged
              );
              $query = new WP_Query($query_param);

              if ($query->have_posts()):while ($query->have_posts()):$query->the_post();
                echo '<div class="col-md-3">';
                piklist('module/products-template-detail', array(
                  'url_link_post' => get_the_permalink(),
                  'url_link_img' => get_url_img($post->ID),
                  'title' => get_the_title(),
                  'price' => $custom_fields['gia'][0],
                  'short_content' => $custom_fields['thong-so-ky-thuat'][0]
                ));
                echo '</div>';
              endwhile;
              endif;
              ?>
            </div>

              <div class="text-center panigation">
                <?php wp_pagenavi(array('query' => $query));
                ?>
              </div>


          </section>
        </div>
      </div>
    </div>
  </div>


<?php endwhile; ?>


<?php
get_footer();
