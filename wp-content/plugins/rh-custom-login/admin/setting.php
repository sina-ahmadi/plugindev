<?php

defined('ABSPATH') || exit;

add_action('admin_menu', 'rh_custom_login_setting_menu');

function rh_custom_login_setting_menu()
{

    $hook_suffix = add_menu_page(
        'custom login',
        'custom login',
        'manage_options',
        'rh_custom_login_setting',
        function () {
            $rh_custom_login_login_option = get_option('rh_custom_login', []);
            include(RH_CUSTOM_LOGIN_VIEW_PATH . 'setting.php');
        },
        'dashicons-welcome-widgets-menus'
    );

    add_action("load-" . $hook_suffix, function () {

        add_action('admin_enqueue_scripts', 'rh_custom_login_load_setting_script');

        if (isset($_POST['column_color'])) {

            $settings = get_option('rh_custom_login', []);

            //convert color code
            $settings['column_color']  = sanitize_hex_color($_POST['column_color']);
            $settings['background']    = esc_url_raw($_POST['background']);
            $settings['css_code']      = esc_url_raw($_POST['css_code']);
            $settings['logo']          = $_POST['logo'];

            //update data in database
            update_option('rh_custom_login', $settings);

            //notification after update
            add_action('admin_notices', 'rh_custom_login_success_notice');

        }
    });
}

function rh_custom_login_success_notice()
{
    echo
    '
    <div class="notice notice-success is-dismissible">
    <p> saved your change </p>
    </div>
    ';
}

function rh_custom_login_load_setting_script()
{
    wp_enqueue_media();

    $cm_setting = wp_enqueue_code_editor([
        'type' => 'text/css'
    ]);

    add_thickbox();

    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script(
        'rh_custom_login_load_setting',
        RH_CUSTOM_LOGIN_JS_URL . 'setting.js',
        ['wp-color-picker'],
        WP_DEBUG ? time() : RH_CUSTOM_LOGIN_VER,
    );

    wp_enqueue_style(
        'rh-custom-login-style',
        RH_CUSTOM_LOGIN_CSS_URL . 'admin-style.css');

    wp_localize_script(
        'rh_custom_login_load_setting',
        'rh_cm_setting',
        $cm_setting
    );
}