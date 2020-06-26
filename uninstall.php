<?php

// if uninstall not called from WordPress exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

defined( 'JFT_ASSISTANT_SLUG__' ) || define( 'JFT_ASSISTANT_SLUG__', '__jft_assistant_' );

$opts   = wp_load_alloptions();
foreach ( $opts as $key => $value ) {
	if ( strpos( $key, JFT_ASSISTANT_SLUG__ ) === 0 ) {
		delete_option( $key );
	}
}
