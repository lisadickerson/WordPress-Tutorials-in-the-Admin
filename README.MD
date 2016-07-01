# WordPress Tutorials in the Admin


## Description 

Creating an additional admin page to store useful resources for clients. Currently used to display a post from my web site entitled “WordPress Tutorials “ a list of free and premium tutorials to learn the basics of WordPress. It will embed and responsively display hard coded html, pdf’s and video in the admin area of WordPress.

__You are free to edit for your own purpose.__



## Installation 

1. Upload `WordPress Tutorials in the Admin` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Re-Purposing 
To re-purpose:

  1.  Place the content you want to embed in the php function `wp_tutorials_admin_page()` 
  1.  Wrap the content in one of the  provided class's to make it responsive.
  For html`.section-wrap`  or `.embed-container` for pdf's and videos.
  

 1. Any assets you add should be placed in the assets folder.Localize your pathing to the plugin directory using`plugin_url` 
 Codex Referance :https://codex.wordpress.org/Function_Reference/plugins_url#Default_Usage
 
     _Examples:_
* `src='<?php echo plugins_url( "/assets/aliaslead-logo-image-300x64.png", __FILE__ ); ?>'`
* `<embed src="<?php echo plugins_url( "/assets/WordPress-Tutorials-v1-3.pdf", __FILE__ ); ?> #zoom=auto">`




#### Frequently Asked Questions 

#### Screenshots 

## Changelog 
* Version 1.0.0
	* Initial commit, added readme.txt and Readme.md
	* 
	
	
___	
###### Copyright and License
 2013-2016 &copy; [Lisa E. A. Dickerson](http://www.aliaslead.com/). This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.   
    
    




