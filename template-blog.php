<?php
/*
 * Template Name:  Blog List
 */
get_header()
?>
<div class='container'>
  <div class='list-blog'>
    <?php
    query_posts(array('post_type' => 'post'));
    while (have_posts()):the_post();
      ?>
      <h3><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h3>
      <br>
      <?php the_excerpt() ?>
      <a class='text-primary pull-right' href='<?php the_permalink() ?>'>xem thêm</a>
      <hr>
      <?php
    endwhile;
    ?>
  </div>
</div>
<?php
get_footer();
