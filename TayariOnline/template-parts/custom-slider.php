<?php 

/**
 * Registers the custom post type for the slider
 *
 * @uses register_post_type Function to register a new post type
 */
function create_post_type_slider_feature() {
	register_post_type( 'slider_feature',
		array(
		'labels' => array(
                    'name' => __('Slider Items', 'post type general name', 'language_domain'),
                    'menu_name' => __('Slider Items', 'language_domain' ),
                    'singular_name' => __('Slider Item', 'post type singular name', 'language_domain' ),
                    'name_admin_bar'=> __('Add Slider'),
                    'add_new' => __('Add New', 'slider_feature', 'language_domain'),
                    'add_new_item' => __('Add New Slider Item', 'language_domain'),
                    'edit_item' =>__('Edit Slider Item', 'language_domain'),
                    'new_item' =>__('New Slider Item', 'language_domain'),
                    'all_items' =>__('All Slider Items', 'language_domain'),
                    'view_item' =>__('View Slider Item', 'language_domain'),
                    'search_items' =>__('Search Slider Items', 'language_domain'),
                    'not_found' =>__('No Slider Items found', 'language_domain'),
                    'not_found_in_trash' =>__('No Slider Items found in Trash', 'language_domain'),
                    'parent_item_colon'  => '',
                    ),
                    'label'               => __( 'Slider Items', 'twentythirteen' ),
                    'description'         => __( 'Add Slider To Author Page And Contact Page', 'twentythirteen' ),
                    'supports'            => array('title','editor','author','thumbnail','excerpt','comments','custom-fields','post-formats'),
                    'hierarchical'        => false,
                    'public'              => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'show_in_nav_menus'   => true,
                    'show_in_admin_bar'   => true,
                    'menu_position'       => 5,
                    'can_export'          => true,
                    'has_archive'         => true,
                    'rewrite' => true,
                    'menu_icon'=>'dashicons-embed-photo',
                    'exclude_from_search' => false,
                    'query_var' => true,
                    'publicly_queryable'  => true,
                    'capability_type'     => 'post',
                    'show_in_rest'        => true,
		)
	);
}

add_action( 'init', 'create_post_type_slider_feature' );

function custom_slider_taxonomy(){
    register_taxonomy(
        'slider_cat',
        'slider_feature',
        array(
            'hierarchical'=>true,
            'label'=>'Slider Category',
            'query_var'=>true,
            'rewrite'=>array('slug'=>'slider-category',
            'with_front'=>true
            )
            
        ));
}

add_action( 'init', 'custom_slider_taxonomy' );

?>