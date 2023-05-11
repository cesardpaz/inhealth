<?php
add_filter( 'mb_settings_pages', 'inhealth_options_page' );
function inhealth_options_page( $settings_pages ) {

    $settings_pages[] = array(
        'id'            => 'at_panel-inhealth',
        'option_name'   => 'theme_option',
        'menu_title'    => 'Panel Theme',
        'submenu_title' => 'General',
        'icon_url'      => '',
        'columns'       => 1,
    );


    return $settings_pages;
}

add_filter( 'rwmb_meta_boxes', 'meta_box_theme' );
function meta_box_theme( $meta_boxes ) {

    $meta_boxes[] = array(
        'id'             => 'box_general',
        'title'          => 'General',
        'settings_pages' => 'at_panel-inhealth',
        'fields'         => array(
            /* Put fields below */

        )
    );

    return $meta_boxes;
}


?>