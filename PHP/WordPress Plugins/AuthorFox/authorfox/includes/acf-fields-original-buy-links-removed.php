<?php 

$additional_book_covers = get_option('covers');
    
if (!$additional_book_covers == 1) {
    
    //Additional Book Covers

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/additional-book-covers.php';
    
}

$acknowledgements = get_option('acknowledgements');
    
if (!$acknowledgements == 1) {
    
    //Acknowledgements Fields

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/acknowledgements.php';
    
}



$coming_soon = get_option('coming_soon');
    
if (!$coming_soon == 1) {
    
    //Coming Soon Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/coming-soon.php';
    
}

$ean = get_option('ean');
    
if (!$ean == 1) {
    
    //EAN Number Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/ean.php';
}


$extra_facts = get_option('extra_facts');
    
if (!$extra_facts == 1) {
    
    //Extra Facts Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/extra-facts.php';
    
}


$extra_information = get_option('extra_information');
    
if (!$extra_information == 1) {
    
    //Extra Information Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/extra-information.php';
    
}

$extracts = get_option('extracts');
    
if (!$extracts == 1) {
    
    //Extract Fields

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/extracts.php';
    
}

$featured_books = get_option('featured_book');
    
if (!$featured_books == 1) {

    //Featured Book Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/featured-book.php';
    
}


$issue_number = get_option('issue_number');
    
if (!$issue_number == 1) {
    
    //Issue Number Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/issue-number.php';
    
}


$published_by = get_option('published_by');
    
if (!$published_by == 1) {
    
    //Published By Fields

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/published-by.php';
    
}

$reviews = get_option('reviews');
    
if (!$published_by == 1) {
    
    //Reviews Field

    require_once plugin_dir_path( __FILE__ ) . '/field-groups/reviews.php';
    
}