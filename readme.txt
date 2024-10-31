=== No Blog Clients ===
Contributors: salzano
Donate link: http://www.tacticaltechnique.com/donate/
Tags: wlwmanifest, EditURI, wlwmanifest_link, rsd_link
Requires at least: 2.4
Tested up to: 2.6.2
Stable tag: 0.081025

Removes link elements from your Wordpress header for 
Windows Live Writer and other blog clients using the 
Wordpress XML-RPC interface.

== Description ==

This plugin removes two actions that produce link 
elements in the header of all your Wordpress URL locations.
These two link elements are the resulting HTML of the actions:

<link rel="EditURI" type="application/rsd+xml" title="RSD" href="WPURL/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="WPURL/wp-includes/wlwmanifest.xml" />

The xmlrpc.php link instructs blog clients where to find the
Wordpress XML-RPC interface via really simple discovery (RSD).
The second link to wlwmanifest.xml reveals the location of
your Wordpress administration dashboard, the location of the
edit post script and manage comments scripts.

== Installation ==

1. Upload the no-blog-clients folder to your wp-content/plugins/ directory
2. Activate the plugin from your Wordpress administration dashboard

== Frequently Asked Questions ==

All other documentation is available at http://www.tacticaltechnique.com/wordpress/no-blog-clients/