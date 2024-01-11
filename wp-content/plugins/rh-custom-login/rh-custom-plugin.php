<?php

/*
 * plugin name: custom login page
 */

defined("ABSPATH") || exit;

define("RH_CUSTOM_LOGIN_VER", '1.0.0');
define("RH_CUSTOM_LOGIN_ASSETC_URL", plugin_dir_url(__FILE__) . "assetc/");
define("RH_CUSTOM_LOGIN_CSS_URL", RH_CUSTOM_LOGIN_ASSETC_URL . "css/");
define("RH_CUSTOM_LOGIN_JS_URL", RH_CUSTOM_LOGIN_ASSETC_URL . "js/");
define("RH_CUSTOM_LOGIN_IMAGES_URL", RH_CUSTOM_LOGIN_ASSETC_URL . "images/");

define("RH_CUSTOM_LOGIN_ADMIN_PATH", plugin_dir_path(__FILE__) . "admin/");
define("RH_CUSTOM_LOGIN_VIEW_PATH", plugin_dir_path(__FILE__) . "view/");

add_action('login_enqueue_scripts', function () {

    wp_register_style(
        'bootstrap',
        RH_CUSTOM_LOGIN_CSS_URL . 'bootstrap.min.css',
        [],
        '5.0.2 ',
        'all'
    );

    wp_enqueue_style(
        'rh-login-style',
        RH_CUSTOM_LOGIN_CSS_URL . 'login.css',
        ['bootstrap'],
        WP_DEBUG ? time() : RH_CUSTOM_LOGIN_VER
    );



    $login_settings = get_option('rh_custom_login', []);
    if (isset($login_settings['column_color'])) {
        $background_color = $login_settings['column_color'];
    }
    if (isset($login_settings['background'])) {
        $background_image = $login_settings['background'];
    }
    if (isset($login_settings['css_code'])) {
        $css = $login_settings['css_code'];
    }
    if (isset($login_settings['logo'])) {
        $logo = $login_settings['logo'];
    }


    wp_add_inline_style(
        'rh-login-style',
        "
        $css
        
        form#loginform{
            background : $background_color;
        }
        
        body {
            background: url('$background_image');
        }
        
        .login h1 a{
            background-image: url('$logo');
        }         
        "
    );

    wp_register_script(
        'bootstrap',
        RH_CUSTOM_LOGIN_JS_URL . 'bootstrap.bundle.min.js',
        [],
        '5.0.2 ',
        true
    );

    wp_enqueue_script(
        'rh-login',
        RH_CUSTOM_LOGIN_JS_URL . 'login.js',
        ['bootstrap'],
        WP_DEBUG ? time() : RH_CUSTOM_LOGIN_VER
    );

});

if (is_admin()) {
    include(RH_CUSTOM_LOGIN_ADMIN_PATH . "setting.php");
}

