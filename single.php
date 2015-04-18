<?php get_header(); ?>
<div class='container'>
  <section class='page-content'>
    <div class="page-header">
      <h1><?php the_title() ?></h1>
    </div>


    <div class="post-content">

      <?php
      wp_reset_postdata();
      the_content() ?>

    </div>
  </section>
</div>

<?php
get_footer();
