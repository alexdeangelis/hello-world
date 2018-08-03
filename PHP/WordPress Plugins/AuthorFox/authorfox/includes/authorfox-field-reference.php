<?php

/**
 * Adds a submenu page under a the Book post type parent.
 */

add_action( 'admin_menu', 'book_register_ref_page' );

function book_register_ref_page() {
    add_submenu_page(
        'edit.php?post_type=book',
        __( 'Books Field Reference', 'textdomain' ),
        __( 'Field Reference', 'textdomain' ),
        'manage_options',
        'book-field-ref',
        'book_ref_page_callback'
    );
}
 
/**
 * Display callback for the submenu page.
 */
function book_ref_page_callback() {
    ?>


    <div class="wrap authorfox-field-reference">
        <h1>Book Field Reference</h1>
        
        <p>This section is a reference for developers when using the Authorfox to develop a theme.</p>
        
        <h2>Authorfox Fields</h2>
        
        <ul>
            
            <li>Published By - authorfox_published_by - Repeater
                
                <ul>
                    
                    <li>Published By: Name - authorfox_published_by_name - Text</li>
                    <li>Published By: Year - authorfox_published_by_year - Number</li>
                    
                </ul>
                
                
            </li>
            
            <li>Buy Links - authorfox_buy_links - Repeater
                
                <ul>
                    
                    <li>Buy Links: Retailer - authorfox_buy_links_retailer - Text</li>
                    <li>Buy Links: URL - authorfox_buy_links_url - URL</li>
                    <li>Buy Links: Logo - authorfox_buy_links_logo - Image</li>
                    
                </ul>
                
                
            </li>
            
            <li>EAN - authorfox_ean - Number</li>
            
            <li>Issue Number - authorfox_issue_number - Number</li>
            
            <li>Extra Information - authorfox_extra_information - Wysiwyg Editor</li>
            
            <li>Reviews - authorfox_reviews - Repeater
                
                <ul>
                    
                    <li>Reviews: Review Text - authorfox_reviews_review_text - Wysiwyg Editor</li>
                    <li>Reviews: Reviewer Name - authorfox_reviews_reviewer_name - Text</li>
                    <li>Reviews: Publication - authorfox_reviews_publication - Text</li>
                    
                </ul>
                
                
            </li>
            
            <li>Extra Facts - authorfox_extra_facts - Repeater
                
                <ul>
                    
                    <li>Extra Facts: Text - authorfox_extra_facts_text - Wysiwyg Editor</li>
                    
                </ul>
                
                
            </li>
            
            <li>Additional Book Covers - authorfox_additional_book_covers - Repeater
                
                <ul>
                    
                    <li>Additional Book Covers: Cover - authorfox_additional_book_covers_cover - Image</li>
                    <li>Additional Book Covers: Country - authorfox_additional_book_covers_country - Text</li>
                    <li>Additional Book Covers: Published By - authorfox_additional_book_covers_published_by - Text</li>
                    <li>Additional Book Covers: Published Year - authorfox_additional_book_covers_published_year - Number</li>
                    
                </ul>
                
                
            </li>
            
            <li>Extract Type - authorfox_extract_type - Radio Button
                
                <ul>
                    
                    <li>Extract Type: PDF - authorfox_extract_type_pdf - File</li>
                    <li>Extract Type: Text - authorfox_extract_type_text - Wysiwyg Editor</li>
                    <li>Extract Type: Link - authorfox_extract_type_link - Link</li>
                    
                </ul>
                
                
            </li>
            
            <li>Acknowledgements Type - authorfox_acknowledgements_type - Radio Button
                
                <ul>
                    
                    <li>Acknowledgements Type: PDF - authorfox_acknowledgements_type_pdf - File</li>
                    <li>Acknowledgements Type: Text - authorfox_acknowledgements_type_text - Wysiwyg Editor</li>
                    <li>Acknowledgements Type: Link - authorfox_acknowledgements_type_link - Link</li>
                    
                </ul>
                
                
            </li>
            
            <li>Featured Book? - authorfox_featured_book - Checkbox</li>
            
        </ul>
        
        <?php
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
            //If the Book Series extension is installed, do this...
            if ( is_plugin_active( 'gf-books-book-series/gf-books-book-series.php' ) ) {
        ?>
        
        <h2>Book Series Extension Fields</h2>
        
        <ul>
            <li>Book Series - authorfox_book_series - Relationship</li>
        </ul>
        
        <?php 
            }
        ?>
        
        <?php
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
            //If the Advanced Buy Links extension is installed, do this...
            if ( is_plugin_active( 'gf-books-advanced-buy-links/gf-books-advanced-buy-links.php' ) ) {
        ?>
        
        <h2>Advanced Buy Links Extension Fields</h2>
        
        <ul>
            <li>Region - authorfox_abl_region - Repeater
            
                <ul>
                    <li>Region Name - authorfox_abl_region_name - Text</li>
                    <li>Region Image - authorfox_abl_region_image - Image</li>
                    <li>Region Book Cover - authorfox_abl_region_book_cover - Image</li>
                    <li>Region Book Type - authorfox_abl_region_book_type - Repeater
                        <ul>
                            <li>Type Name - authorfox_abl_type_name - Text</li>
                            <li>Type Links - authorfox_abl_type_links - Repeater
                                <ul>
                                    <li>Retailer - authorfox_abl_retailer - Text</li>
                                    <li>URL - authorfox_abl_url - URL</li>
                                    <li>Retailer Logo - authorfox_abl_retailer_logo</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            
            </li>
        </ul>
        
        <?php 
            }
        ?>
        
    </div>


    <?php
}

