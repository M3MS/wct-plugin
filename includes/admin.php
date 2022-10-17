<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function wct_post_sc() {

    global $post;

    if (is_admin() && get_post_type( get_the_ID() ) == 'wct_tables') {

        // Get the data
        $id = $post->ID;

        // Echo out the field
        echo ' <input readonly="readonly" class="" value="[winner_comparison_table id=&quot;' . $id . '&quot;]"/>';

    }
}

add_action('edit_form_after_title', 'wct_post_sc');