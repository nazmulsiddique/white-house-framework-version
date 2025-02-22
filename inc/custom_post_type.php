<?php
function custom_features(){

    // Gallery Custom Post Type
    register_post_type('gallery',
    array(
        'labels' => array(
            'name' => ('Gallery'),
            'singular_name' => ('Gallery'),
            'all_items' => ('All New Gallery'),
            'add_new' => ('Add New Gallery'),
            'add_new_item' => ('Add Gallery'),
            'edit_item' => ('Edit Gallery'),
            'new_item' => ('New Gallery'),
            'view_item' => ('View Gallery'),
            'search_items' => ('Search Gallery'),
            'not_found' => ('Sorry, We Cound\'n find the Gallery you are looking for.'),
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'menu_position' => 15,
        'has_archive' => true,
        'hierarchial' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'gallery'),
        'show_in_rest'       => true,
        'rest_base'          => 'gallery-post',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'thumbnail'),
    ));

    // Jobs Custom Post
	register_post_type('jobs',
	array(
		'labels' => array(
			'name' => ('Jobs'),
			'singular_name' => ('Jobs'),
			'add_new' => ('Add New Jobs'),
			'add_new_item' => ('Add New Jobs'),
			'edit_item' => ('Edit Jobs'),
			'new_item' => ('New Jobs'),
			'view_item' => ('View Jobs'),
			'not_found' => ('Sorry, We Cound\'n find the service you are looking for.'),
		),
		'menu_icon' => 'dashicons-megaphone',
		'public' => true,
		'menu_position' => 7,
		'has_archive' => true,
		'hierarchial' => true,
		'capability_type' => 'post',
		'rewrite' => array('slag' => 'jobs'),
        'show_in_rest'       => true,
        'rest_base'          => 'jobs',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
	));

	
}

add_action('init', 'custom_features');

function custom_columns_head($defaults) {
    $new_columns = array();
    foreach ($defaults as $key => $value) {
        $new_columns[$key] = $value;
        if ($key == 'title') {
            $new_columns['featured_image'] = 'Featured Image';
        }
    }
    return $new_columns;
}
function custom_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        echo get_the_post_thumbnail($post_ID, array(100, 100));
    }
}
add_filter('manage_gallery_posts_columns', 'custom_columns_head');
add_action('manage_gallery_posts_custom_column', 'custom_columns_content', 20, 2);
