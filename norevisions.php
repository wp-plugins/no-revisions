<?php
/*
Plugin Name: No Revisions
Plugin URI: http://www.hostscope.com/wordpress-plugins/norevisions_wordpress_plugin
Description: Disables post revisions in WordPress 2.6 and on.  Activate the plugin to disable them.  Deactivate the plugin to reenable them.  Note that this does not delete any existing revisions, just stops wordpress from making any more.
Author: John Leavitt
Version: 1.1
Author URI: http://www.jrrl.com
*/

@remove_action ( 'pre_post_update', 'wp_save_post_revision' );

?>
