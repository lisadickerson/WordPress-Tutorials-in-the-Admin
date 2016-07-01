<?php
/**
 * /*
 * Plugin Name: WordPress Tutorials in the Admin:
 * Version: 1.
 * Plugin URI: http://www.aliaslead.com/
 * Description: Adding a "WordPress Tutorial" Page in the admin area.Testing
 * Author: Lisa Dickerson
 * Author URI: http://www.aliaslead.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain:
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Lisa Dickerson
 * @since 1.0.0
 *
 * User: aliaslead
 * Date: 5/10/2016
 * Time: 1:07 PM
 */


/*
 * Create a new admin page for WP-Tutorials with admin_menu()
 *add_menu_page ( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )
 * */

function wp_tutorials_admin_menu() {
	add_menu_page( 'WordPress Tutorials', 'WP Tutorials &raquo; ', 'manage_options', 'wp-tutorials-in-admin/wp-tutorials-admin-page.php', 'wp_tutorials_admin_page', 'dashicons-welcome-learn-more ', 7 );
}

add_action( 'admin_menu', 'wp_tutorials_admin_menu' );

/*
 * Register and enqueue styles for new admin page with wp_admin_style()
 *
 * */

function wp_tutorials_wp_admin_style() {

	wp_register_style( 'wp_tutorial_styles', plugin_dir_url( __FILE__ ) . '/css/wp-tutorial-styles.css', false, '1.0.0' );
	wp_enqueue_style( 'wp_tutorial_styles' );
}

add_action( 'admin_enqueue_scripts', 'wp_tutorials_wp_admin_style' );

/*
 * Create content for the admin page with admin_page()
 *
 * */

function wp_tutorials_admin_page() {
	/*
	 * Place any content you want to embed in this function.
	 * Use the classes .section-wrap and .embed-container to utilize the responsive styles
	 * */

	?>
	<!--Description Hard Coded Html-->
	<p class="example">Example:Hard Coded Html using .section-wrap class</p>
	<div class="section-wrap">

		<img class="alignnone size-medium wp-image-251"
		     src='<?php echo plugins_url( "/assets/aliaslead-logo-image-300x64.png", __FILE__ ); ?>'
		     alt="aliaslead.com.png" width="300" height="64"/>

		<h2 align="center">Client training and WordPress resources v1.3</h2>

		<h3>Were to begin:</h3>

		<p>
			So you have a brand new WordPress website. Now what?
			It&apos;s a little like having a brand new car and not knowing how to drive. It&apos;s time to learn!
		</p>

		<p>
			You can take your brand new website out for a spin &hellip;
			<strong>OR</strong>, it might be wise to log a few hours on a <b><i>&quot;simulator&quot;</i></b>
			beforehand.
			If you crash and burn on the simulator it&apos;s not fatal, but on your live site that&apos;s another
			matter.</p>

		<h3>Simulator:</h3>

		<p>
			<b>DesktopServer</b> by ServerPress is a good way to load WordPress on your local computer and practice
			before
			you make edits to your live site.
		</p>
		<ol>
			<li>Step one get the free version of <a href="https://serverpress.com/get-desktopserver/" target="new">DesktopServer</a>
				and install it.
				<ol style="list-style-type: lower-latin;">
					<li><a href="http://docs.serverpress.com/article/44-installing-desktopserver" target="new">How to
							install DesktopServer</a></li>
					<li><a href="http://docs.serverpress.com/article/150-getting-started-with-desktopserver"
					       target="new">Getting started with DesktopServer</a></li>
				</ol>
			</li>
		</ol>
		<p>
			Now that you have a simulator to learn on you can try everything in the following tutorials,
			without fear that you might break your live site.</p>

		<h3>Resources:</h3>
		<i>Free resources to start with:</i>
		<ol>
			<li>ithemes: <a href="https://ithemes.com/tutorial/category/wordpress-101/" target="new">WordPress 101 Video
					Tutorials</a>
				<ol style="list-style-type: lower-latin;">
					<li><a href="https://ithemes.com/tutorials/what-is-wordpress/" target="new">What is WordPress</a>
					</li>
					<li><a href="https://ithemes.com/tutorials/wordpress-login/" target="new">Your WordPress Login</a>
					</li>
					<li><a href="https://ithemes.com/tutorials/wordpress-dashboard/" target="new">Exploring the
							WordPress Dashboard</a></li>
					<li><a href="https://ithemes.com/tutorials/the-wordpress-admin-bar/" target="new">Using the
							WordPress Admin Bar</a></li>
					<li><a href="https://ithemes.com/tutorials/exploring-wordpress-settings/" target="new">Exploring
							WordPress Settings</a></li>
					<li><a href="https://ithemes.com/tutorials/wordpress-posts-vs-pages/" target="new">WordPress Posts
							vs Pages</a></li>
					<li><a href="https://ithemes.com/tutorials/creating-a-wordpress-post/" target="new">Creating a
							WordPress Post</a></li>
					<li><a href="https://ithemes.com/tutorials/adding-images-in-wordpress/" target="new">Adding Images
							in WordPress</a></li>
					<li><a href="https://ithemes.com/tutorials/using-the-wordpress-media-library/" target="new">Using
							the WordPress Media Library</a></li>
					<li><a href="https://ithemes.com/tutorials/formatting-wordpress-posts/" target="new">Formatting
							WordPress Posts</a></li>
					<li><a href="https://ithemes.com/tutorials/using-wordpress-categories-and-tags/" target="new">WordPress
							Categories and Tags</a></li>
					<li><a href="https://ithemes.com/tutorials/creating-users-in-wordpress/" target="new">Creating Users
							in WordPress</a></li>
				</ol>
				&nbsp;</li>
			<li><a href="http://wordpress.tv/2009/01/15/writing-and-publishing-a-post/" target="new">WordPress-TV</a>
			</li>
		</ol>
		<i>Pay resources:</i>
		<ol>
			<li><a href="https://www.wp101.com/tutorials/" target="new">WP101 parts 1-11</a></li>
		</ol>

		<hr/>
		<p>
			WordPress Tutorials: Client training and WordPress resources v1.3
		</p>
		Copyright &copy; 2015 Lisa E. A. Dickerson: <a href="http://aliaslead.com" target="new">aliaslead.com</a>
		</p>

	</div>


	<!--Description Embed a pdf-->
	<p class="example">Example:embed a pdf using .embed-container class</p>
	<div class='embed-container'>
		<embed src="<?php echo plugins_url( "/assets/WordPress-Tutorials-v1-3.pdf", __FILE__ ); ?> #zoom=auto">
	</div>

	<!--Description Embed Hosted Video-->
	<p class="example">Example:Embed Hosted Video using the .embed-container class</p>
	<div class='embed-container'>
		<iframe width="560" height="315"
		        src="https://www.youtube.com/embed/3vVfEsi-R6M?list=PLfOXCtnURNbZjLUyU_Isp39VdAjqEctNw"
		        frameborder="0" allowfullscreen></iframe>
	</div>


	<?php
}