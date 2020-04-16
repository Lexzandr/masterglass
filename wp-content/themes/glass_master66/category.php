<? get_header(); ?>
    <main class="container" role="main">
        <?php if( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
        <h1><? single_cat_title(); ?></h1>
        <? if( have_posts() ) : ?>
            <div class="row">
                <? while ( have_posts() ) : the_post(); ?>
                    <div class="uslugi__item col-md-4 col-sm-6 col-xs-12">
                        <a href="<?= the_permalink(); ?>" class="uslugi__item__wrap">
                            <div class="uslugi__item__img">
                                <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ) ?>" alt="<?php get_the_title(); ?>" />
                            </div>
                            <div class="uslugi__item__title">
                                <? the_title(); ?>
                            </div>
                        </a>
                    </div>
                <? endwhile; ?>
            </div>
        <? endif; ?>
    </main>
<? get_footer(); ?>
