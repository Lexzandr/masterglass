<? get_header(); ?>
<main id="main" class="container" role="main">
    <?php if( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
    <h1><? the_title(); ?></h1>
    <? the_content(); ?>
</main>
<?= do_shortcode('
[showyamap]
	[placemark address="Екатеринбург, Машинная 42 корпус 3"]
[/showyamap]
'); ?>


<?php get_footer(); ?>
