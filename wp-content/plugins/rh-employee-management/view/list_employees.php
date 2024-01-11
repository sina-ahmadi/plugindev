<?php

global $wpdb;

$table_employees = $wpdb->prefix . 'rh_employees';

$result = $wpdb->get_results(
    "SELECT * FROM $table_employees"
);
echo PHP_EOL;
print_r($result);
echo PHP_EOL;
echo $result->first_name;
echo PHP_EOL;
echo $result->last_name;
echo PHP_EOL;

exit();