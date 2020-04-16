<?php get_header(); ?>


    <div class="container">
        <?php if( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>

        <div class="row">
            <div class="left__sidebar col-md-3 col-sm-4 hidden-xs">
                <?
                    $current_cat = get_the_category();
                    $post_in_cat = get_posts(['numberposts' => -1, 'category' => $current_cat[0]->term_id]);
                ?>
                <h2><?= $current_cat[0]->name; ?></h2>
                <ul class="cat__list">
                    <? foreach ($post_in_cat as $item): ?>
                        <li <? if( $item->ID == get_the_ID() ) echo 'class="active"'; ?>><a href="<?= get_permalink($item); ?>"><?= $item->post_title;?></a></li>
                    <? endforeach; ?>
                </ul>

                <? get_template_part('sidebar'); ?>
            </div>


            <div class="col-md-9 col-sm-8 col-xs-12">
                <main id="main" role="main" class="content">
                    <h1><? the_title(); ?></h1>

                    <?php
                        $gallery = rwmb_meta('gallery_select');

                        if ($gallery) :

                        $query_products = new WP_Query( array(
                            'post_type' => 'post',
                            'cat' => '6',
                            'p' => $gallery,
                            'posts_per_page' => '1',
                            'orderby' => 'date',
                            'order' => 'DESC',
                        ));

                        if ($query_products -> have_posts()) : while ($query_products -> have_posts()) : $query_products -> the_post();
                    ?>
                        <div class="uslugi--gallery">
                            <?php
                                $images = rwmb_meta( 'image_advanced_1', 'type=image&size=thumbnail&limit=4' );
                                
                                if (!empty($images)) {
                                    echo '<div class="row mfp-gallery">';
                                        foreach ($images as $image) {
                                            echo '<div class="uslugi__item uslugi__item--gallery col-md-3 col-xs-6">
                                                <div class="uslugi__item__wrap">
                                                    <a href="', esc_url($image['full_url']), '" class="uslugi__item__img">
                                                        <img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">
                                                    </a>
                                                </div>
                                            </div>';
                                        }
                                    echo '</div>';
                                }
                            ?>

                            <a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Больше работ</a>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php endif; ?>


                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php if (rwmb_meta('product_price_title')): ?>
                            <div class="product-price">
                                <div class="product-price__title">
                                    <?php echo rwmb_meta('product_price_title'); ?>
                                </div>

                                <button type="button" class="btn btn-primary product-price__btn" data-toggle="collapse" data-target="#collapse-product-<?php echo the_ID(); ?>"><span class="caret"></span></button>

                                <div id="collapse-product-<?php echo the_ID(); ?>" class="table-responsive collapse product-price__content">
                                    <?php echo rwmb_meta('product_price_content'); ?>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; // end of the loop. ?>
                </main>
            </div>
        </div>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>