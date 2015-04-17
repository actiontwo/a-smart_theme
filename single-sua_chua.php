<?php get_header() ?>
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
        <?php the_title() ?>
        <?php the_content() ?>


      </section>
    </div>
  </div>
</div>

<?php
get_footer();
