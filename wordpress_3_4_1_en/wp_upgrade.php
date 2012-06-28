<?php
	$absolut_path = $argv[1];
	define('WP_INSTALLING', true);
	define('WP_MEMORY_LIMIT', '64M');
	require_once($absolut_path.'/wp-load.php');
	timer_start();
	require_once(ABSPATH .'wp-admin/includes/upgrade.php');
	delete_site_transient('update_core');
	wp_upgrade();
	die( '0' );
?>