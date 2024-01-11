<?php

defined("ABSPATH") || exit;

function rh_custom_style_menu_body()
{

    $custom_style = get_option("rh_custom_style", "");
    $custom_script = get_option("rh_custom_script", "");

    include(RH_ADMIN_MENU_BODY . "body.php");
}

function rh_help_tab($screen, $tab){
    if ($tab['id'] == 'style-help-tap-1'){
        echo "tab 1: ";
    }else{
        echo "tab 2: ";
    }

    echo "I love you";
}

function rh_process_form(){

    /*
    * mange help tap
    */
    $screen = get_current_screen();
    $screen->add_help_tab([
        'title'     => 'Guide-1',
        'id'        => 'style-help-tap-1',
        'content'   => 'Guide for custom style plugin',
        'callback'  => 'rh_help_tab'
    ]);
    $screen->add_help_tab([
        'title' => 'Guide-2',
        'id' => 'style-help-tap-2',
        'content' => 'Guide for custom style plugin',
        'callback'  => 'rh_help_tab'
        ]);

    $GLOBALS['custom_style_notice'] = false;

    if (isset($_POST['custom-script'])) {

        $style = trim($_POST['custom-style']);
        $script = trim($_POST['custom-script']);

        $savedStyle = update_option("rh_custom_style", $style);
        $savedScript = update_option("rh_custom_script", $script);

        $notice = [
            'type' => "success",
            'message' => "The save was done successfully"
        ];

        $GLOBALS['custom_style_notice'] = $notice;
    }
}

function rh_custom_style_menu_setting()
{
    include(RH_ADMIN_MENU_BODY . "setting.php");
}

function rh_custom_style_menu()
{
    //menu
    $menu_suffix = add_menu_page(
        "Add style",
        "Add style",
        "read",
        "Add-slug-0",
        "rh_custom_style_menu_body",
        "dashicons-html"
    );

    //submenu
/*    $menu_suffix = add_submenu_page(
        "Add-slug-0",
        "Setting",
        "Setting",
        "read",
        "Add-slug-1",
        "rh_custom_style_menu_setting"
    );*/

    add_action("load-" . $menu_suffix, "rh_process_form");

}

add_action("admin_menu", "rh_custom_style_menu");