=== WordPress Tutorials in the Admin ===
Contributors: lisaDkrsn
Donate link: aliaslead.com
Tags: Adding Admin page's, WordPress Tutorials
Requires at least: 4.
Tested up to: 4.
Stable tag: 4.
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adding a "WordPress Tutorial" Page in the admin area.

== Description ==

Creating an additional admin page to store useful resources for clients. Currently used to display a post from my web site entitled “WordPress Tutorials “a list of free and premium tutorials to learn the basics of WordPress.It will embed and responsively display hard coded html, pdf’s and video in the admin area of WordPress.

You are free to edit for your own purpose.



== Installation ==

1. Upload `WordPress Tutorials in the Admin` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Re-Purposing ==
To repurpose place the content you want to embed in the php function `wp_tutorials_admin_page()` and wrap it in either class `.section-wrap` for html or `.embed-container` for pdf's and videos.

 Any assets you add should be placed in the assets folder.Localize your pathing to the plugin directory using`plugin_url`
 Codex Referance :https://codex.wordpress.org/Function_Reference/plugins_url#Default_Usage

 Example:
 image `src='<?php echo plugins_url( "/assets/aliaslead-logo-image-300x64.png", __FILE__ ); ?>'`
 pdf `<embed src="<?php echo plugins_url( "/assets/WordPress-Tutorials-v1-3.pdf", __FILE__ ); ?> #zoom=auto">`




== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==


