<?php

/*
 * Plugin Name: Open DWP Links in a New Window
 * Plugin URI:  http://www.mikeyarce.com/
 * Description: Makes all links from the Display WordPress Posts widget open in a new window.
 * Version:     0.1
 * Author:      Mikey Arce
 * Author URI:  http://www.mikeyarce.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Adds the Javascript for opening Display WordPress Posts links in a new window
 */

function odwpinw_scripts() {
	wp_enqueue_script( 'dwpoinw', '/wp-content/plugins/open-dwp-in-new-window/odwpinw.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'odwpinw_scripts' );