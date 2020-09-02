<?php
/**
* Plugin Name:       Disable WordPress Lazyload
* Plugin URI:        https://github.com/kaminoweb
* Description:       Disable native WordPress Lazyload
* Version:           0.1
* Requires at least: 5.5
* Author:            Kaminoweb Inc
* Author URI:        https://kaminoweb.com/
* License:           GPLv2
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function kaminoweb_disable_lazyload() {
         return false;
}

add_filter('wp_lazy_loading_enabled', 'kaminoweb_disable_lazyload', 10, 3);

