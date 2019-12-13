<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('FancyImg_Title');
delete_option('FancyImg_Setting');
 
// for site options in Multisite
delete_site_option('FancyImg_Title');
delete_site_option('FancyImg_Setting');

global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}FancyImg_plugin");