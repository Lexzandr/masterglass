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
                        $images = rwmb_meta( 'image_advanced_1', 'type=image&size=gallery-thumb' ); // Prior to 4.8.0
                        
                        if (!empty($images)) {
                            echo '<div class="row mfp-gallery uslugi--gallery">';

                                foreach ($images as $image) {
                                    echo '<div class="uslugi__item uslugi__item--gallery col-md-4 col-sm-6 col-xs-12">
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

                    <?php
                        // <div class="uslugi__item__title">
                        //     ', esc_attr($image['title']), '
                        // </div>
                    ?>

                    <? the_content(); ?>
                </main>
            </div>
        </div>

    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
