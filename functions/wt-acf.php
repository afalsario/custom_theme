<?php
/***********************************************************************************************/
/* Advanced Custom Fields Theme Options Page */
/***********************************************************************************************/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
               'position' => "55.3"
    ));

       acf_add_options_sub_page(array(
        'page_title'     => 'Header/Footer/Misc',
        'menu_title'    => 'Header/Footer/Misc',
        'parent_slug'    => 'theme-general-settings',
    ));

       acf_add_options_sub_page(array(
        'page_title'     => 'Google Analytics Options',
        'menu_title'    => 'Google Analytics',
        'parent_slug'    => 'theme-general-settings',
    ));

}

/***********************************************************************************************/
/* Auto load items from an options page repeater */
/***********************************************************************************************/

// function acf_load_titles_field_choices( $field ) {
//
//     // reset choices
//     $field['choices'] = array();
//
//
//     // if has rows
//     if( have_rows('job_titles_repeater', 'option') ) {
//
//         // while has rows
//         while( have_rows('job_titles_repeater', 'option') ) {
//
//             // instantiate row
//             the_row();
//
//
//             // vars
//             $value = get_sub_field('job_title');
//             $label = get_sub_field('job_title');
//
//
//             // append to choices
//             $field['choices'][ $value ] = $label;
//
//         }
//
//     }
//
//
//     // return the field
//     return $field;
//
// }
//
// add_filter('acf/load_field/name=job_posting_job_title', 'acf_load_titles_field_choices');
