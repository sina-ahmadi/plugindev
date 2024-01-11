<?php

/** 
 * Plugin name: RhashNull Banner
 * plugin URI: https://wordpress.org/plugins/
 * description: This plugin show fixed banner in the website
 * version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author: Sina Ahmadi
 * Author URI: https://rhashnull.com/
 */



define( "RHASHNULL_IMAGES_URI", plugin_dir_url(__FILE__) . "assets/images/" );

add_action( "wp_footer", function(){
    $banner_link = "https://rhashnull.com/";
    $banner_url = RHASHNULL_IMAGES_URI . "asiatech-advertise.gif";

    add_option( "rhashnull_uninstall", "Sina Ahmadi" );

    ?>

    <style>
        a.rhashnull_images {
            display: block;
            position: fixed;
            left: 10px;
            bottom: 20px;
            z-index: 9;
            box-shadow: 0px 3px 6px #000000;
            width: 200px;

        }
    </style>

    <a href="<?php echo $banner_link; ?>" class="rhashnull_images" target="_blank">
        <img src="<?php echo $banner_url; ?>" alt="it's rocket git for website">
    </a>

    <?php

} );
