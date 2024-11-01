=== TFA_update_attached_file ===
Contributors: jeremiah01292
Donate link: http://www.jeremiahstillings.net
Tags: TFA Media year and Date Stripper
Requires at least: 4.9.6
Tested up to: 4.9.6
Stable tag: trunk
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plug in strips the year and date uri from the media files URL meta data.
This plug in works best with the [upload-url-path-enabler](https://www.screenfeed.fr/plugin-wp/upload-url-path-enabler/ "The Plug in that works with this one. Verified working in 4.9.6")
== Description ==
Have you ever installed WordPress then decided to move where it was installed? This causes huge issues with your media that is attached to your pages. 
This plug in strips the year and date uri from the media files URL meta data which allows one to dump all the media into the wp-content/uploads folder and not worry about the date you originally uploaded it.

This plug in works best with the [upload-url-path-enabler](https://www.screenfeed.fr/plugin-wp/upload-url-path-enabler/ "The Plug in that works with this one. Verified working in 4.9.6")  


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Add new plugin. Select TFA_update_attached_file.zip. Install.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Change permalinks to plain then back to postname.

Proper set up of the upload-url-path plug in.

[Image of proper setup for the helper plug in](https://jeremiahstilllings.files.wordpress.com/2018/09/tfa-attached-file-installation-setup.jpg)

Once activated you can deactivate it and remove it if you wish. What it does is fix Media Attachment URL meta tags in the database.

This version is if you use a single folder  /wp-content/uploads/

DO NOT USE THIS IF YOU USE YEAR AND MONTH FOLDERS ( WORD PRESS DEFAULTS )
== Frequently Asked Questions ==

= Why no screen shots?=

This plug in is a backend utility, and does not display anything. It does it work silently, but I added one of the results it produces.

= How many media items can it do? =

The default post time out is 30 seconds, so it is limited to Attachment ID's 1 thru 1000.

If you have over 1000 media items you can increase your post timeout and increase that number in the updateme.php file.

== Screenshots ==
1. This is just proof it does something.



== Changelog ==

= 1.0 =
* Initial build 
* No screenshots for a reason


== Upgrade Notice ==

= 1.0 =
Initial build




Ordered list:

1. Strip year and month from your media library url metadata




Here's a link to [jeremiah01292](http://www.jeremiahstillings.net/ "Building tools that do things that no one else thinks are necessary") 