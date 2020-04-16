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
                    <? the_content(); ?>
                </main>
            </div>
        </div>

    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
