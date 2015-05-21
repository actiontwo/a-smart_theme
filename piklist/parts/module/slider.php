<?php
$theme_options = get_option('page_info_setting');
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php foreach ($theme_options['home_slider'] as $key => $imageId) { ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" class=""></li>
    <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php foreach ($theme_options['home_slider'] as $key => $imageId) { ?>
      <div class="item <?= ($key == 0) ? 'active' : '' ?>">
        <?= wp_get_attachment_image($imageId, 'full'); ?>
        <!--<img src="<?= MEDIA ?>em_slideshow/1380248952_1_slideshow2.jpg" alt="...">-->
        <div class="carousel-caption">

        </div>
      </div>
    <?php } ?>



  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

