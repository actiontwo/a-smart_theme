<?php get_header(); ?>

<div class="wrapper_content">
  <div class="container_24 ">    
    <div class="em_post-item">
      <div class="post-title">
        <h2><?php the_title() ?></h2>
        <small class="time-stamp">
          Tuesday, Oct 1 2013, 11:05AM
        </small>
      </div>
      <div class="post-content">
        <?php the_content() ?>
      </div>

    </div>
  </div>
</div>

<?php
get_footer();
