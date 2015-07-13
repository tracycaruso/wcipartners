<?php register_nav_menus(
	array(
		'primary' => 'Primary Navigation',
	));
?>
<?php register_sidebar(
	array(
		'name' => 'Regular Sidebar',
		'before_widget' => '',
		'after_widget' =>'',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
		));
?>
<?php register_sidebar(
	array(
		'name' => 'Commercial Sidebar',
		'before_widget' => '',
		'after_widget' =>'',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
		));
?>
<?php register_sidebar(
	array(
		'name' => 'Residential Sidebar',
		'before_widget' => '',
		'after_widget' =>'',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
		));
?>
<?php register_sidebar(
	array(
		'name' => 'News Sidebar',
		'before_widget' => '',
		'after_widget' =>'',
		'before_title' => '<h3 class="sideline"><span>',
		'after_title' => '</span></h3>',
		));
?>
<?php add_theme_support('post-thumbnails');?>
<?php 
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'page-extralg', 950, 940, true ); //(cropped)
	add_image_size( 'page-lg', 786, 760, true ); //(cropped)
	add_image_size( 'page-sm', 300, 2142, true ); //(cropped)

}
?>
<?php
if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
                'id' => 'featured-image-2',
                'post_type' => 'page',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Mobile Image',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as Mobile Image',
                )
        );

        new kdMultipleFeaturedImages($args);
}
?>
<?php
if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args2 = array(
                'id' => 'slide-image-2',
                'post_type' => 'pose',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Slide Mobile Image',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as Slide Mobile Image',
                )
        );

        new kdMultipleFeaturedImages($args2);
}
?><?php
// Add new post type for Associates

add_action('init', 'associate_info_init');

function associate_info_init() 

{

	$associate_labels = array(

		'name' => _x('Associates', 'post type general name'),

		'singular_name' => _x('Associate', 'post type singular name'),

		'all_items' => __('All Associates'),

		'add_new' => _x('Add new Associate', 'associates'),

		'add_new_item' => __('Add new associate'),

		'edit_item' => __('Edit associate'),

		'new_item' => __('New associate'),

		'view_item' => __('View associate'),

		'search_items' => __('Search in associates'),

		'not_found' =>  __('No associates found'),

		'not_found_in_trash' => __('No associates found in trash'), 

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $associate_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true, 

		'query_var' => true,

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 5,

		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		
		'has_archive' => 'associates'

	); 

	register_post_type('associates',$args);

}
?><?php 
// The following argument configuration selects testimonials of the "review" tag and sets a slower rotation speed for the display widget
$args1                          = array(
    'category'                    => 'commercial'
   
);
?><?php 
// The following argument configuration selects testimonials of the "review" tag and sets a slower rotation speed for the display widget
$args2                          = array(
    'category'                    => 'residential'
   
);