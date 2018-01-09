<?php

/***********************************************************************************************/
/* Move Yoast To The Bottom */
/***********************************************************************************************/
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

/***********************************************************************************************/
/* Get Posts */
/***********************************************************************************************/

function newsPosts() {
	$args = array(
            'posts_per_page' => 3,
            );
	return get_posts( $args );
}

function featuredPost() {
	$args = array(
            'posts_per_page' => 1,
            'category_name' => 'featured'

            );
	return get_posts( $args );
}

/***********************************************************************************************/
/* Edit Archive Title */
/***********************************************************************************************/

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        } elseif ( is_tax('product_categories') ) {
            $title = single_term_title( '', false );
        }
    return $title;

});

/***********************************************************************************************/
/* Gravity Forms */
/***********************************************************************************************/

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/***********************************************************************************************/
/* Custom Excerpts   */
/***********************************************************************************************/

// custom excerpt length
function custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// add more link to excerpt
function custom_excerpt_more($more) {
   global $post;
   return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __('Read More', 'themify') .'</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
