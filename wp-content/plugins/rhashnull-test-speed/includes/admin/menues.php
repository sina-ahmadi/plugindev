<?php

defined("ABSPATH") || exit;

function rh_test_speed_menu_admin_body(){

    $notice = false;

    if (isset($_POST['custom-script'])) {
            
        $style  = trim($_POST['custom-style']);
        $script = trim($_POST['custom-script']);

        update_option("rh_custom_style", $style);
        update_option("rh_custom_script", $script);

        $notice = [
            'type'      => 'success',
            'message'   => 'The save was done successfully',
        ];
    }

    $customStyle = get_option("rh_custom_style", '');
    $customScript = get_option("rh_custom_script", '');

    include(RH_TEST_SPEED_MENU_ADMIN_BODY . "body.php");
}

function rh_test_speed_menu_admin_setting(){
    include(RH_TEST_SPEED_MENU_ADMIN_BODY . "setting.php");
}

function rh_test_speed_menu() {

    //menu
    add_menu_page( 
        "Test Speed",
        "Test Speed",
        "read",
        "Test-Speed-0",
        "rh_test_speed_menu_admin_body",
        "dashicons-html"
    );

    //summenu
    add_submenu_page( 
        "Test-Speed-0",
        "Test Speed",
        "Setting",
        "read",
        "Test-Speed-1",
        "rh_test_speed_menu_admin_setting",
    );
}

add_action("admin_menu", "rh_test_speed_menu");
