<?php
/*
Plugin Name: Rocket No Bot :(
Description: Deactivate the WP Rocket bot if he polls too hard.
Author: WP Rocket
Author URI: http://wp-rocket.me
Version: 1.0
Licence: GPLv3
*/
 
add_filter( 'do_run_rocket_bot', '__return_false' );
?>
