<?php
get_header();

//debug(get_queried_object());

if (have_posts()):while (have_posts()):the_post();

    the_title();
    the_post_thumbnail();
    echo '<br>';
  endwhile;
else:
  echo 'No Post';
endif;
?>
<?php get_footer(); ?>  
