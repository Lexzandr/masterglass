<?php
// Подключение скриптов и стилей.
if ( !is_admin() ) {
    function frontend_scripts() {
        wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome/font-awesome.css' );
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/libs/magnific-popup/magnific-popup.css' );
        wp_enqueue_style( 'frontend-css', get_template_directory_uri(). '/css/main.css' );

        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script( 'magnific-popup', get_template_directory_uri(). '/libs/magnific-popup/jquery.magnific-popup.min.js');

        wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/main.js', ['jquery']);
    }

    add_action( 'wp_enqueue_scripts', 'frontend_scripts', true );
}

add_filter('widget_text', 'do_shortcode');
add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', function(){
    register_nav_menus([
    'main_menu' => 'Главное меню',
    ]);
});

function sidebars() {
    register_sidebar( array(
        'name'          => 'Левая колонка',
        'id'            => 'left_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'sidebars' );

function my_more_link($more_link, $more_link_text) {
    return str_replace($more_link_text, '<span class="btn btn-green">Подробнее</span>', $more_link);
}
add_filter('the_content_more_link', 'my_more_link', 10, 2);


/**
 * Register new thumbnail.
 */
// if ( function_exists( 'add_theme_support' ) ) {
//     add_theme_support( 'post-thumbnails' );
//         set_post_thumbnail_size( 150, 150 ); // размер миниатюры поста по умолчанию
// }

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'gallery-thumb', 262, 465, array( 'left', 'top' ) );
}


/**
 * Load Meta Boxes.
 */
require get_template_directory() . '/inc/meta-box.php';