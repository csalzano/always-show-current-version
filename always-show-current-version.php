<?php
/**
 * Plugin Name: Always Show Current Version in Dashboard Footer
 * Plugin URI: https://github.com/csalzano/always-show-current-version
 * Description: Shows the current WordPress version number in the Dashboard footer even when an update is available.
 * Version: 1.0.0
 * Author: Corey Salzano
 * Author URI: https://profiles.wordpress.org/salzano
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter( 'update_footer', 'salzano_persist_version_number', 11 );

function salzano_persist_version_number( $value ) {
	$version = get_bloginfo( 'version', 'display' );
	if( false !== strpos( $value, $version ) ) {
		return $value;
	}
	return sprintf( __( ' Version %s, ' ), $version ) . $value;
}
