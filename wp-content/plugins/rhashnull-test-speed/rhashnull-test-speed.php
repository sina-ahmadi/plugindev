<?php

/**
 * Plugin Name: rhashnull-test-speed
 * Plugin URI: https://wordpress.org/plugins/
 * Description: This is a woderfull app for test speed your website
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.5
 * Author: Rhashnull
 * Author URI: https://rhashnull.com/
 * Licence: GPLv2 later
 * Licence URI: https://rhashnull.com/
 */

 defined("ABSPATH") || exit;

 define("RH_TEST_SPEED_ADMIN", plugin_dir_path(__FILE__) . "includes/admin/");
 define("RH_TEST_SPEED_MENU_ADMIN_BODY", plugin_dir_path(__FILE__) . "includes/");


 if(is_admin()){
    include(RH_TEST_SPEED_ADMIN . "menues.php");
 }

 function rh_test_speed_bar_menu($wp_admin_bar) {

    $wp_admin_bar->add_menu([
        "id" => "Test-speed",
        "title" => "Test speed",
        "href" => "https://gtmetrix.com?url=http://rstfood.co/",
        "meta"=>[
            'target' => '_blank',
        ]
    ]);
 }

 add_action( "admin_bar_menu", "rh_test_speed_bar_menu", 99 );
 