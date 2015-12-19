<?php get_header(); ?>
<div class='container'>
  <section class='page-content'>
    <div class="page-header">
      <h1>Kết quả</h1>
    </div>


    <div class="post-content">
      <?php if (have_posts()): while (have_posts()):the_post(); ?>

          <h4><a class='text-primary' href='<?php the_permalink() ?>'><?php the_title() ?></a></h4>
          <div class='row'>

            <div class="col-xs-3">
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

            <div class="col-xs-9">
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
  </section>
</div>

<?php
get_footer();
