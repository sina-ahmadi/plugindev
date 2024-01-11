<?php
/**
 * Plugin Name: Employee management
 */

defined('ABSPATH') || exit;

define('RH_MANAGE_EMPLOYEES_ADMIN_PATH', plugin_dir_path(__FILE__) . 'admin/');
define('RH_MANAGE_EMPLOYEES_VIEW', plugin_dir_path(__FILE__) . 'view/');
define('RH_MANAGE_EMPLOYEES_IMAGES', plugin_dir_path(__FILE__) . 'assets/images');


if (is_admin()) {
    include(RH_MANAGE_EMPLOYEES_ADMIN_PATH . 'menus.php');
}

register_activation_hook(__FILE__, 'rh_install');

function rh_install()
{

    global $wpdb;

    $table_employees = $wpdb->prefix . 'rh_employees';

    $wp_collate = $wpdb->collate;

    $sql = "
            CREATE TABLE `$table_employees` (
            `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `first_name` VARCHAR(50) NOT NULL,
            `last_name` VARCHAR(50) NOT NULL,
            `birthdate` DATE DEFAULT NULL,
            `avatar` VARCHAR(250) NOT NULL,
            `weight` FLOAT NOT NULL,
            `mission` SMALLINT(5) UNSIGNED NOT NULL,
            `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(), PRIMARY KEY(`ID`)) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE=$wp_collate COMMENT = 'This is table keep employees information'
                ";


    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    dbDelta($sql);
}


