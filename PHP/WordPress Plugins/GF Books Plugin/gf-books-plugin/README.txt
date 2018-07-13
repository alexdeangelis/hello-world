=== GF Books Plugin ===
Contributors: Goodman Fox
Tested up to: 4.9.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin that sets up a Book custom post type & Advanced Custom Fields for that post type.

== Description ==

This plugin will create a Book custom post type. 

The plugin needs Advanced Custom Fields to work properly. If the plugin is installed without Advanced Custom Fields, a warning on the Wordpress admin dashboard will pop up, advising that Advanced Custom Fields is installed. This GF Books Plugin will work without ACF, but will not display all the extra fields for the book custom post type.

Once both plugins have been installed & activated you should see the Books menu item on the WordPress admin sidebar. Clicking on 'Add New' you will see a number of extra fields associated with this custom post type.

The following is a list of all the new fields, the field name & field type:

Book Information Fields

-- Published By - phrbp_published_by - Repeater
---- Published By: Name - gfbp_published_by_name - Text
---- Published By: Year - gfbp_published_by_year - Number

-- Buy Links - gfbp_buy_links - Repeater
---- Buy Links: Retailer - gfbp_buy_links_retailer - Text
---- Buy Links: URL - gfbp_buy_links_url - URL
---- Buy Links: Logo - gfbp_buy_links_logo - Image

-- EAN - gfbp_ean - Number

-- Issue Number - gfbp_issue_number - Number

-- Extra Information - gfbp_extra_information - Wysiwyg Editor

-- Reviews - gfbp_reviews - Repeater
---- Reviews: Review Text - gfbp_reviews_review_text - Wysiwyg Editor
---- Reviews: Reviewer Name - gfbp_reviews_reviewer_name - Text
---- Reviews: Publication - gfbp_reviews_publication - Text

-- Extra Facts - gfbp_extra_facts - Repeater
---- Extra Facts: Text - gfbp_extra_facts_text - Wysiwyg Editor

-- Additional Book Covers - gfbp_additional_book_covers - Repeater
---- Additional Book Covers: Cover - gfbp_additional_book_covers_cover - Image
---- Additional Book Covers: Country - gfbp_additional_book_covers_country - Text
---- Additional Book Covers: Published By - gfbp_additional_book_covers_published_by - Text
---- Additional Book Covers: Published Year - gfbp_additional_book_covers_published_year - Number

-- Extract Type - gfbp_extract_type - Radio Button
---- Extract Type: PDF - gfbp_extract_type_pdf - File
---- Extract Type: Text - gfbp_extract_type_text - Wysiwyg Editor
---- Extract Type: Link - gfbp_extract_type_link - Link

-- Acknowledgements Type - gfbp_acknowledgements_type - Radio Button
---- Acknowledgements Type: PDF - gfbp_acknowledgements_type_pdf - File
---- Acknowledgements Type: Text - gfbp_acknowledgements_type_text - Wysiwyg Editor
---- Acknowledgements Type: Link - gfbp_acknowledgements_type_link - Link

-- Featured Book? - gfbp_featured_book - Checkbox

-- Coming Soon? - gfbp_coming_soon - Checkbox
---- Release Date - gfbp_release_date - Date/Time Picker

You are able to turn off any of these fields on the Book Field Settings page.

== Installation ==

1. Upload `gf-books-plugin.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. If not already done, please install & activate Advanced Custom Fields

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.