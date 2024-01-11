<?php

/**
 * Plugin Name: rhashnull custom style
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


define("RH_ADMIN_MENU", plugin_dir_path(__FILE__) . "includes/admin/");
define("RH_ADMIN_MENU_BODY", plugin_dir_path(__FILE__) . "includes/");

if (is_admin()) {
    include(RH_ADMIN_MENU . "menues.php");
}else{
    add_action("wp_head", function (){
        $savedStyle = get_option("rh_custom_style", '');
        printf('<style>%s</style>', $savedStyle);
    });

    add_action("wp_footer", function (){
        $savedScript = get_option("rh_custom_script", '');
        printf('<script>%s</script>', $savedScript);
    }, 999);
}
