<?php


function books_settings_page() {
    add_settings_section(
        "section",
        "",
        null,
        "authorfox-settings"
    );
    
    //Additional Covers
    
    add_settings_field(
        "covers",
        "Additional Covers",
        "covers_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "covers"
    );
    
    //Acknowledgements
    
    add_settings_field(
        "acknowledgements",
        "Acknowledgements",
        "acknowledgements_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "acknowledgements"
    );
    
    //If Advanced Buy Links extension is not installed, do this...
    if ( is_plugin_active( 'gf-books-advanced-buy-links/gf-books-advanced-buy-links.php' ) ) {
    } else {
        //Buy Links

        add_settings_field(
            "buy_links",
            "Buy Links",
            "buy_links_display",
            "authorfox-settings",
            "section"
        );

        register_setting(
            "section",
            "buy_links"
        );
    }
    
    //Coming Soon
    
    add_settings_field(
        "coming_soon",
        "Coming Soon",
        "coming_soon_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "coming_soon"
    );
    
    //EAN
    
    add_settings_field(
        "ean",
        "EAN",
        "ean_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "ean"
    );
    
    //Extra Facts
    
    add_settings_field(
        "extra_facts",
        "Extra Facts",
        "extra_facts_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "extra_facts"
    );
    
    //Extra Facts
    
    add_settings_field(
        "extra_information",
        "Extra Information",
        "extra_information_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "extra_information"
    );
    
    //Extracts
    
    add_settings_field(
        "extracts",
        "Extracts",
        "extracts_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "extracts"
    );
    
    //Featured Book
    
    add_settings_field(
        "featured_book",
        "Featured Book",
        "featured_book_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "featured_book"
    );
    
    //Issue Number
    
    add_settings_field(
        "issue_number",
        "Issue Number",
        "issue_number_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "issue_number"
    );
    
    //Published By
    
    add_settings_field(
        "published_by",
        "Published By",
        "published_by_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "published_by"
    );
    
    //Reviews
    
    add_settings_field(
        "reviews",
        "Reviews",
        "reviews_display",
        "authorfox-settings",
        "section"
    );
    
    register_setting(
        "section",
        "reviews"
    );
    
}

function covers_display()
{
   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="covers" value="1" <?php checked(1, get_option('covers'), true); ?> /> 
   <?php
}

function acknowledgements_display()
{
   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="acknowledgements" value="1" <?php checked(1, get_option('acknowledgements'), true); ?> /> 
   <?php
}




function buy_links_display() {
    //If Advanced Buy Links extension is not installed, do this...
    if ( is_plugin_active( 'gf-books-advanced-buy-links/gf-books-advanced-buy-links.php' ) ) {
    } else {


   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="buy_links" value="1" <?php checked(1, get_option('buy_links'), true); ?> /> 

   <?php



    }
}

function coming_soon_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="coming_soon" value="1" <?php checked(1, get_option('coming_soon'), true); ?> /> 

   <?php
}

function ean_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="ean" value="1" <?php checked(1, get_option('ean'), true); ?> /> 

   <?php
}

function extra_facts_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="extra_facts" value="1" <?php checked(1, get_option('extra_facts'), true); ?> /> 

   <?php
}

function extra_information_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="extra_information" value="1" <?php checked(1, get_option('extra_information'), true); ?> /> 

   <?php
}

function extracts_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="extracts" value="1" <?php checked(1, get_option('extracts'), true); ?> /> 

   <?php
}

function featured_book_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="featured_book" value="1" <?php checked(1, get_option('featured_book'), true); ?> /> 

   <?php
}

function issue_number_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="issue_number" value="1" <?php checked(1, get_option('issue_number'), true); ?> /> 

   <?php
}

function published_by_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="published_by" value="1" <?php checked(1, get_option('published_by'), true); ?> /> 

   <?php
}

function reviews_display() {

   ?>
        <!-- Here we are comparing stored value with 1. Stored value is 1 if user checks the checkbox otherwise empty string. -->
        <input type="checkbox" name="reviews" value="1" <?php checked(1, get_option('reviews'), true); ?> /> 

   <?php
}

add_action("admin_init", "books_settings_page");


 
/**
 * Display callback for the submenu page.
 */
function authorfox_settings_page() {
    ?>


    <div class="wrap gf-books-field-reference">
        
        <h1>Book Field Settings</h1>
        
        <p>By default, the Authorfox has all of its fields turned on.</p>
        
        <p>Below you are able to select any fields that you would like to <strong>turn off</strong>.</p>
        
        <form method="post" action="options.php">
            <?php
               settings_fields("section");
  
               do_settings_sections("authorfox-settings");
                 
               submit_button(); 
            ?>
         </form>
        
    </div>


    <?php
}



/**
 * Adds a submenu page under a the Book post type parent.
 */



function book_register_settings_page() {
    add_submenu_page(
        'edit.php?post_type=book',
        __( 'Book Field Settings', 'authorfox' ),
        __( 'Book Field Settings', 'authorfox' ),
        'manage_options',
        'authorfox-settings',
        'authorfox_settings_page'
    );
}

add_action( 'admin_menu', 'book_register_settings_page' );
