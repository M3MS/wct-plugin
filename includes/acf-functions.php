<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if( ! class_exists( 'ACF' ) ) {

    // Define path and URL to the ACF plugin.
    define( 'WCT_ACF_PATH', WCT_PLUGIN_PATH . '/vendor/advanced-custom-fields-pro/' );
    define( 'WCT_ACF_URL', WCT_PLUGIN_URL . '/vendor/advanced-custom-fields-pro/' );

    // Include the ACF plugin.
    include_once( WCT_ACF_PATH . 'acf.php' );

    // Customize the url setting to fix incorrect asset URLs.
    add_filter( 'acf/settings/url', function( $url ) {
        return WCT_ACF_URL;
    } );

    // (Optional) Hide the ACF admin menu item.
    add_filter( 'acf/settings/show_admin', function( $show_admin ) {
        return false;
    } );
    
}

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_63459d1662f3d',
        'title' => 'Winner Comparison Table',
        'fields' => array(
            array(
                'key' => 'field_63459d1e38628',
                'label' => 'Table Rows',
                'name' => 'table_rows',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_63459d5738629',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Please use square images',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => 125,
                        'min_height' => 125,
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_63459d8e3862a',
                        'label' => 'Show Badge',
                        'name' => 'show_badge',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 0,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_63459dbc3862b',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'radio',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_63459d8e3862a',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'overall' => 'Best Overall',
                            'value' => 'Best Value',
                            'premium' => 'Premium choice',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 1,
                        'save_other_choice' => 1,
                        'default_value' => '',
                        'layout' => 'vertical',
                        'return_format' => 'label',
                    ),
                    array(
                        'key' => 'field_63459e703862c',
                        'label' => 'Product Name',
                        'name' => 'product_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_63459f083862d',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_63459f163862e',
                                'label' => 'Feature',
                                'name' => 'feature',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_63459f383862f',
                        'label' => 'CTA',
                        'name' => 'cta',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'wct_tables',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'discussion',
            3 => 'comments',
        ),
        'active' => true,
        'description' => '',
    ));
    
endif;