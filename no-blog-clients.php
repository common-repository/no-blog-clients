<?php
/*
Plugin Name: No Blog Clients
Version: 0.081025
Plugin URI: http://www.tacticaltechnique.com/wordpress/no-blog-clients/
Description: Removes link elements from your Wordpress header for Windows Live Writer and other blog clients using the <a href="http://codex.wordpress.org/XML-RPC_Support">Wordpress XML-RPC interface</a>.
Author: Corey Salzano
Author URI: http://www.tacticaltechnique.com/
*/

/* windows live writer */
remove_action('wp_head', 'wlwmanifest_link');
/* really simple discovery of xml rpc interface */
remove_action('wp_head', 'rsd_link');

?>