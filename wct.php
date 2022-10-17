<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/*
Plugin Name:  Winner Comparison Table
Version: 1.0
Description: Showcase Top Picks
Author: Mehdy El Marabti
Text Domain: wct
*/

define( 'WCT_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WCT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once __DIR__ . '/vendor/autoload.php';

require_once WCT_PLUGIN_PATH . '/includes/enqueue.php';

require_once WCT_PLUGIN_PATH . '/includes/functions.php';
