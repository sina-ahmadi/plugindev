<?php

/**
 * Plugin Name: RhashNull Seo
 * Plugin URI: https://wordpress.org/plugins/
 * Description: این فقط یک افزونه نیست، این نشان‌دهنده امید و شور و شوق یک نسل به طور خلاصه در یک کلمه است که توسط تیم ما یعنی <strong>رشنال</strong> سروده شده است
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author:Rhashnull
 * Author URI: https://rhashnull.com/
 * Licence: GPLv2 later
 * Licence URI: https://rhashnull.com/
 */

//-----------------------------------------------------------------------------------
//  define('RHASHNULL_SEO_IMAGES_URL', plugin_dir_url( __FILE__ ) . 'assets/images/');
//  define('RHASHNULL_SEO_CSS_URL', plugin_dir_url( __FILE__ ) . 'assets/css/');
//  define('RHASHNULL_SEO_JS_URL', plugin_dir_url( __FILE__ ) . 'assets/css/');
 
//  define('RHASHNULL_SEO_LIBS', plugin_dir_path( __FILE__ ) . 'libs/');
//-----------------------------------------------------------------------------------




// register_activation_hook(__FILE__, function(){

//     $php = '7.4';
//     $wp = '6.0.0';

//     global $wp_version;

//     if(version_compare( $wp_version, $wp, '<')){

//         wp_die(
//             sprintf( 'You must have atleast wordpress version %s, your current wordpress version is %s', $wp, $wp_version)
//         );
//     }

//     if(version_compare( PHP_VERSION, $php, '<')){

//         wp_die(
//             sprintf( 'You must have atleast php version %s', $php)
//         );
//     }

    add_option('rhashnull_seo_author', 'Sina Ahmadi');   


//     $logFilepath = plugin_dir_path(__FILE__) . 'log.txt';
//     file_put_contents($logFilepath, date('Y-m-d H:i:s') . ': Plugin activate!' . PHP_EOL, FILE_APPEND );

// });

// register_deactivation_hook(__FILE__, function(){

//     $logFilepath = plugin_dir_path(__FILE__) . 'log.txt';
//     file_put_contents($logFilepath, date('Y-m-d H:i:s') . ': Plugin deactivate!' . PHP_EOL, FILE_APPEND );
// });




