<?php
/*
  Title: Info career
  Description: A description of what my widget does
 */

$query_param = array(
    'post_type' => array('post'),
    'posts_per_page' => -1,
//        'category_name' =>'tuyen-dung'
);
$query = new WP_Query($query_param);
?>
<div class="career panel-primary panel">
    <div class="panel-heading">
        <h3 class="panel-title">Tin tức</h3>
    </div>
    <div class="panel-body">
        <div class="most" style='padding: 10px;'>  
            <?php
            $count_carree = 0;


            if ($query->have_posts()):while ($query->have_posts()):$query->the_post();
                    if ($count_carree != 0 && $count_carree % 1 == 0) {
                        echo '</div><div class="most">';
                    }
                    $count_carree++;
                    ?>
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="<?php the_permalink() ?>"><img width="100%" src="<?=
                                get_url_img(get_the_ID(), '60x60')
                                ?>" alt="..." /></a>
                        </div>
                        <div class="col-xs-8">
                            <?php // $custom_fields = get_post_custom(get_the_ID());  ?>
                            <h5 class="title-product"><a href="<?php the_permalink() ?>" class="text-primary"><?php the_title() ?></a></h5>
                        </div>

                        <div class="col-md-12"><?php the_excerpt() ?></div>
                    </div>
                    <?php
                endwhile;
            else:
                ?>
                <p>Hiện tại chưa có thông tin nào...</p>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
<script>
    jQuery(window).load(function () {
        jQuery('.career .panel-body').bxSlider({
//      mode: 'vertical',
            pager: false,
            easing: 'cubic-bezier(0.12,0.12,0.16,0.10)',
            controls: false,
            auto: true,
            pause: 5000
        });
    })
</script>
