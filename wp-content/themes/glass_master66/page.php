<? get_header(); ?>
    <main id="main" class="container" role="main">
        <?php if( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
        <h1><? the_title(); ?></h1>
        <? the_content(); ?>
    </main>
<?php get_footer(); ?>
