=== GF Books Plugin: Advanced Buy Links ===
Contributors: Goodman Fox
Tested up to: 4.9.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin that replaces the basic Buy Links fields in the GF Books Plugin with a more advanced Buy Links section with more fields & options. Needs the GF Books Plugin to work correctly.

== Description ==

This plugin will replace the standard Buy Links with a more advanced Buy Links sections. 

The plugin needs Advanced Custom Fields & the GF Books Plugin to work properly. If the plugin is installed without Advanced Custom Fields, a warning on the Wordpress admin dashboard will pop up, advising that Advanced Custom Fields is installed.


The following is a list of all the new fields, the field name & field type:

Advanced Buy Links

-- Region - gfbp_abl_region - Repeater
---- Region Name - gfbp_abl_region_name - Text
---- Region Book Cover - gfbp_abl_region_book_cover - Image
---- Region Book Type - gfbp_abl_region_book_type - Repeater
------ Type Name - gfbp_abl_type_name - Text
------ Type Links - gfbp_abl_type_links - Repeater
-------- Retailer - gfbp_abl_retailer - Text
-------- URL - gfbp_abl_url - URL
-------- Retailer Logo - gfbp_abl_retailer_logo - Image


== Installation ==

1. Upload `gf-books-plugin.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. If not already done, please install & activate Advanced Custom Fields

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.