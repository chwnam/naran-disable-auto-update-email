<?php
/*
 * Plugin Name: Disable Auto-Update Email
 * Description: Disable sending automatic update notice mail.
 * Author:      changwoo
 * Author URI:  https://blog.changwoo.pe.kr
 * Plugin URI:  https://github.com/chwnam/naran-disable-auto-update-email
 * Version:     1.0.0
 */

add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );
