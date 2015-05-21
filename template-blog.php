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
    if (have_posts()): while (have_posts()):the_post();
        ?>

        <h4><a class='text-primary' href='<?php the_permalink() ?>'><?php the_title() ?></a></h4>
        <div class='row'>

          <div class="col-md-3">
            <a href="#" class="thumbnail">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail() ?>
                <?php
              else:
                echo '<img src="http://placehold.it/240x200"/>';
              endif;
              ?>
            </a>
          </div>

          <div class="col-md-9">
    <?php the_excerpt() ?>
            <a href='<?php the_permalink() ?>' class='text-info'>Xem thêm ...</a>
          </div>
        </div>
        <hr>
        <?php
      endwhile;
    else:
      echo 'Không có kết quả nào';
    endif;
    ?>
  </div>
</div>
<?php
get_footer();
