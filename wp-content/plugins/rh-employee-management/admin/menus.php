<?php

defined('ABSPATH') || exit;

add_action('admin_menu', 'rh_add_menus');

function rh_add_menus()
{

    add_menu_page(
        'employees',
        'employees',
        'manage_options',
        'rh_employees',
        function () {
            include RH_MANAGE_EMPLOYEES_VIEW . 'list_employees.php';


        }
    );


    add_submenu_page(
        'rh_employees',
        'Create employees',
        'Create employees',
        'manage_options',
        'rh_employees_create',
        function () {
            include RH_MANAGE_EMPLOYEES_VIEW . 'form_employees.php';
        }
    );
}

add_action('admin_init', 'rh_form_submit');
function rh_form_submit()
{
    global $pagenow;

    if ($pagenow == 'admin.php' && isset($_GET['page']) && $_GET['page'] == 'rh_employees_create') {

        if (isset($_POST['save_employee'])) {

            $data = [
                'first_name' => sanitize_text_field($_POST['first_name']),
                'last_name' => sanitize_text_field($_POST['last_name']),
                'birthdate' => sanitize_text_field($_POST['birthdate']),
                'avatar' => esc_url_raw($_POST['avatar']),
                'mission' => absint($_POST['mission']),
                'weight' => floatval($_POST['weight']),
                'created_at' => current_time('mysql'),
            ];

            global $wpdb;
            $table_employees = $wpdb->prefix . 'rh_employees';

            $inserted = $wpdb->insert(
                $table_employees,
                $data,
                [
                    '%s', '%s','%s', '%s', '%d', '%f', '%s',
                ]
            );

            if ($inserted) {

                $employee_id = $wpdb->insert_id;
                wp_redirect(
                    admin_url('admin.php?page=rh_employees_create&employee_status=inserted&employee_id=' . $employee_id)
                );
                exit();

            } else {
                wp_redirect(
                    admin_url('admin.php?page=rh_employees_create&employee_status=inserted_error')
                );
                exit();
            }



        }
    }
}

add_action( 'admin_notices', 'rh_notices');
function rh_notices(){
    $type    = '';
    $message = '';

    if (isset( $_GET['employee_status'] )){
        $status = sanitize_text_field( $_GET['employee_status'] );
        if ( $status == 'inserted'){
            $message = 'Its save babe';
            $type    = 'success';
        } elseif ( $status == 'inserted_error' ){
            $message = 'Its not save babe';
            $type    = 'error';
        }
    }

    if ($type && $message) {
        ?>
            <div class="notice notice-<?php echo $type; ?> is-dismissible">
                <p><?php echo $message; ?></p>
            </div>
        <?php
    }
}



