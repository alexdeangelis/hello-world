<?php get_header(); ?>


<?php 


$published = get_field('authorfox_published_by');
$buy = get_field('authorfox_buy_links');
$ean = get_field('authorfox_ean');
$issue = get_field('authorfox_issue_number');
$info = get_field('authorfox_extra_information');
$reviews = get_field('authorfox_reviews');
$facts = get_field('authorfox_extra_facts');
$covers = get_field('authorfox_additional_book_covers');
$extract = get_field('authorfox_extract_type');
$ack = get_field('authorfox_acknowledgements_type');
$featured = get_field('authorfox_featured_book');
$coming = get_field('authorfox_coming_soon');
$release = get_field('authorfox_release_date');

    
    
    
    
    
    
    
    
    
    

var_dump($published);
var_dump($buy);
var_dump($ean);
var_dump($issue);
var_dump($info);
var_dump($reviews);
var_dump($facts);
var_dump($covers);
var_dump($extract);
var_dump($ack);
var_dump($featured);
var_dump($coming);
var_dump($release);
?>



<?php get_footer(); ?>