<?php

/**
 * Plugin Name: RhashNull Filter
 * Plugin URI: https://wordpress.org/plugins/
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author:Rhashnull
 * Author URI: https://rhashnull.com/
 * Licence: GPLv2 later
 * Licence URI: https://rhashnull.com/
 */

// add_filter("the_content", function(){
    
// });

// add_filter("show_admin_bar", function(){
//     return false;
// });

// add_filter("wp_title", function($wp_title){

//     if(is_single()){
//         return "خیلی خری | ";
//     }
  
//     return $wp_title;
// });

// function Rhashnull_login_check($user, $username) {
    
//     if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
//         $user = get_user_by('login', $username);
//         if($user) {
//         return $user;
//         }
//     }

//     return $user;
// }
// add_filter("authenticate", 'Rhashnull_login_check', 999, 2 );


// add_filter("user_row_actions", function($actions, $user) {

//     $actions[] = '<a href="#">Test</a>';

//     return $actions;
// }, 10, 2);