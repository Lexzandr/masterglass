<?php

function post_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
	    'id' => 'post_meta_boxes',
	    'title' => esc_html__( 'Дополнительные поля', 'metabox-online-generator' ),
	    'context' => 'advanced',
	    'priority' => 'default',
	    'autosave' => false,
	    'post_types' => 'post',
	    // 'category' => '6',
	    'fields' => array(
	        array(
	            'id' => $prefix . 'image_advanced_1',
	            'type' => 'image_advanced',
	            'name' => esc_html__( 'Изображения', 'metabox-online-generator' ),
	            'max_file_uploads' => '',
	            'force_delete' => false,
	            'max_status' => false,
	            // 'image_size' => 'gallery-thumb',
	        ),
	        array(
				'id' => $prefix . 'gallery_select',
				'type' => 'post',
				'name' => esc_html__( 'Галерея', 'metabox-online-generator' ),
				'post_type' => 'post',
				'field_type' => 'select_advanced',
				'query_args'  => array(
			        'cat' => '6',
			    ),
			),
			array(
				'id' => $prefix . 'product_price_title',
				'type' => 'text',
				'name' => esc_html__( 'Прайс заголовок', 'metabox-online-generator' ),
				'size' => 100,
			),
			array(
				'id' => $prefix . 'product_price_content',
				'name' => esc_html__( 'Прайс контент', 'metabox-online-generator' ),
				'type' => 'wysiwyg',
			),
	    ),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'post_meta_box' );

add_filter( 'rwmb_media_add_string', 'post_change_add_string' );
function post_change_add_string() {
    return '+ Добавить изображения';
}

?>