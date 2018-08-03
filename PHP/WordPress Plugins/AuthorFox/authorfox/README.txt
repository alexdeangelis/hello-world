=== Authorfox ===
Contributors: Goodman Fox
Tested up to: 4.9.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin that sets up a Book custom post type & Advanced Custom Fields for that post type.

== Description ==

This plugin will create a Book custom post type. 

The plugin needs Advanced Custom Fields to work properly. If the plugin is installed without Advanced Custom Fields, a warning on the Wordpress admin dashboard will pop up, advising that Advanced Custom Fields is installed. This Authorfox will work without ACF, but will not display all the extra fields for the book custom post type.

Once both plugins have been installed & activated you should see the Books menu item on the WordPress admin sidebar. Clicking on 'Add New' you will see a number of extra fields associated with this custom post type.

The following is a list of all the new fields, the field name & field type:

Book Information Fields

-- Published By - phrbp_published_by - Repeater
---- Published By: Name - authorfox_published_by_name - Text
---- Published By: Year - authorfox_published_by_year - Number

-- Buy Links - authorfox_buy_links - Repeater
---- Buy Links: Retailer - authorfox_buy_links_retailer - Text
---- Buy Links: URL - authorfox_buy_links_url - URL
---- Buy Links: Logo - authorfox_buy_links_logo - Image

-- EAN - authorfox_ean - Number

-- Issue Number - authorfox_issue_number - Number

-- Extra Information - authorfox_extra_information - Wysiwyg Editor

-- Reviews - authorfox_reviews - Repeater
---- Reviews: Review Text - authorfox_reviews_review_text - Wysiwyg Editor
---- Reviews: Reviewer Name - authorfox_reviews_reviewer_name - Text
---- Reviews: Publication - authorfox_reviews_publication - Text

-- Extra Facts - authorfox_extra_facts - Repeater
---- Extra Facts: Text - authorfox_extra_facts_text - Wysiwyg Editor

-- Additional Book Covers - authorfox_additional_book_covers - Repeater
---- Additional Book Covers: Cover - authorfox_additional_book_covers_cover - Image
---- Additional Book Covers: Country - authorfox_additional_book_covers_country - Text
---- Additional Book Covers: Published By - authorfox_additional_book_covers_published_by - Text
---- Additional Book Covers: Published Year - authorfox_additional_book_covers_published_year - Number

-- Extract Type - authorfox_extract_type - Radio Button
---- Extract Type: PDF - authorfox_extract_type_pdf - File
---- Extract Type: Text - authorfox_extract_type_text - Wysiwyg Editor
---- Extract Type: Link - authorfox_extract_type_link - Link

-- Acknowledgements Type - authorfox_acknowledgements_type - Radio Button
---- Acknowledgements Type: PDF - authorfox_acknowledgements_type_pdf - File
---- Acknowledgements Type: Text - authorfox_acknowledgements_type_text - Wysiwyg Editor
---- Acknowledgements Type: Link - authorfox_acknowledgements_type_link - Link

-- Featured Book? - authorfox_featured_book - Checkbox

-- Coming Soon? - authorfox_coming_soon - Checkbox
---- Release Date - authorfox_release_date - Date/Time Picker

You are able to turn off any of these fields on the Book Field Settings page.

== Installation ==

1. Upload `authorfox.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. If not already done, please install & activate Advanced Custom Fields

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.