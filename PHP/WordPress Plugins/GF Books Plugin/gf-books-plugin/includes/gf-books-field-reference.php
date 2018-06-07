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


    <div class="wrap gf-books-field-reference">
        <h1>Book Field Reference</h1>
        
        <p>This section is a reference for developers when using the GF Books Plugin to develop a theme.</p>
        
        <h2>GF Books Plugin Fields</h2>
        
        <ul>
            
            <li>Published By - gfbp_published_by - Repeater
                
                <ul>
                    
                    <li>Published By: Name - gfbp_published_by_name - Text</li>
                    <li>Published By: Year - gfbp_published_by_year - Number</li>
                    
                </ul>
                
                
            </li>
            
            <li>Buy Links - gfbp_buy_links - Repeater
                
                <ul>
                    
                    <li>Buy Links: Retailer - gfbp_buy_links_retailer - Text</li>
                    <li>Buy Links: URL - gfbp_buy_links_url - URL</li>
                    <li>Buy Links: Logo - gfbp_buy_links_logo - Image</li>
                    
                </ul>
                
                
            </li>
            
            <li>EAN - gfbp_ean - Number</li>
            
            <li>Issue Number - gfbp_issue_number - Number</li>
            
            <li>Extra Information - gfbp_extra_information - Wysiwyg Editor</li>
            
            <li>Reviews - gfbp_reviews - Repeater
                
                <ul>
                    
                    <li>Reviews: Review Text - gfbp_reviews_review_text - Wysiwyg Editor</li>
                    <li>Reviews: Reviewer Name - gfbp_reviews_reviewer_name - Text</li>
                    <li>Reviews: Publication - gfbp_reviews_publication - Text</li>
                    
                </ul>
                
                
            </li>
            
            <li>Extra Facts - gfbp_extra_facts - Repeater
                
                <ul>
                    
                    <li>Extra Facts: Text - gfbp_extra_facts_text - Wysiwyg Editor</li>
                    
                </ul>
                
                
            </li>
            
            <li>Additional Book Covers - gfbp_additional_book_covers - Repeater
                
                <ul>
                    
                    <li>Additional Book Covers: Cover - gfbp_additional_book_covers_cover - Image</li>
                    <li>Additional Book Covers: Country - gfbp_additional_book_covers_country - Text</li>
                    <li>Additional Book Covers: Published By - gfbp_additional_book_covers_published_by - Text</li>
                    <li>Additional Book Covers: Published Year - gfbp_additional_book_covers_published_year - Number</li>
                    
                </ul>
                
                
            </li>
            
            <li>Extract Type - gfbp_extract_type - Radio Button
                
                <ul>
                    
                    <li>Extract Type: PDF - gfbp_extract_type_pdf - File</li>
                    <li>Extract Type: Text - gfbp_extract_type_text - Wysiwyg Editor</li>
                    <li>Extract Type: Link - gfbp_extract_type_link - Link</li>
                    
                </ul>
                
                
            </li>
            
            <li>Acknowledgements Type - gfbp_acknowledgements_type - Radio Button
                
                <ul>
                    
                    <li>Acknowledgements Type: PDF - gfbp_acknowledgements_type_pdf - File</li>
                    <li>Acknowledgements Type: Text - gfbp_acknowledgements_type_text - Wysiwyg Editor</li>
                    <li>Acknowledgements Type: Link - gfbp_acknowledgements_type_link - Link</li>
                    
                </ul>
                
                
            </li>
            
            <li>Featured Book? - gfbp_featured_book - Checkbox</li>
            
        </ul>
        
        <?php
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
            //If the Book Series extension is installed, do this...
            if ( is_plugin_active( 'gf-books-book-series/gf-books-book-series.php' ) ) {
        ?>
        
        <h2>Book Series Extension Fields</h2>
        
        <ul>
            <li>Book Series - gfbp_book_series - Relationship</li>
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
            <li>Region - gfbp_abl_region - Repeater
            
                <ul>
                    <li>Region Name - gfbp_abl_region_name - Text</li>
                    <li>Region Image - gfbp_abl_region_image - Image</li>
                    <li>Region Book Cover - gfbp_abl_region_book_cover - Image</li>
                    <li>Region Book Type - gfbp_abl_region_book_type - Repeater
                        <ul>
                            <li>Type Name - gfbp_abl_type_name - Text</li>
                            <li>Type Links - gfbp_abl_type_links - Repeater
                                <ul>
                                    <li>Retailer - gfbp_abl_retailer - Text</li>
                                    <li>URL - gfbp_abl_url - URL</li>
                                    <li>Retailer Logo - gfbp_abl_retailer_logo</li>
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

