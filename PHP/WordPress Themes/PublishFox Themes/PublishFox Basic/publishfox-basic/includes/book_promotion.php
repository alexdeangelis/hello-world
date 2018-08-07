<?php 

//This is the argument that defines the new WP Query
$args = array(
    'posts_per_page'    => 1, //The number of posts to get. -1 means get all
    'post_type'         => 'books', //The post type goes here
    'order'             => 'ASC', //Designates the ascending or descending order of the 'orderby' parameter
);


//For more info on everything WP Query, go to https://gist.github.com/luetkemj/2023628

$the_query = new WP_Query( $args );

//The IF statement, using the WP Query
//If the WP Query bring back any results, do this...
if ( $the_query->have_posts() ) {
    
    //This is the start of the cutom loop
    while( $the_query->have_posts() ) {
        
        $the_query->the_post();
        
        //In here $post will bring back the post specific to the custom WP Query
        
        $book_title = $post->post_title;
        $book_summary = get_field('tfpf_book_summary');
        $book_extract_show = get_field('tfpf_show_book_extract');
        $buy_links_regions = get_field('tfpf_book_retail_region');
        ?>
        
        
        <div class="block__book-promo">
            <div class="container">
                <div class="row flex">
                    <div class="col-xs-12 col-sm-4 col-sm-push-8">
                        <div class="book-promo__image">
                            
                            
                            <?php 
            
                            
                            if( get_the_post_thumbnail() ) {

                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                ?>

                                    <img src="<?php echo $url; ?>"/>

                                <?php

                            } 

                            else { 

                            }

                            ?>
                            
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-sm-pull-4 flex align-items-center">
                        <div class="book-promo__details">
                            <div class="book-promo__details__heading">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <?php if ($book_summary) { ?>
                            <div class="book-promo__details__text">
                                <?php echo $book_summary; ?>
                            </div>
                            <?php } ?>
                            <div class="book-promo__details__buttons">
                                
                                
                                
                                
                            <?php if ($buy_links_regions) { 
                                
                                ?>
                                
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Buy Now
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                
                                <?php
                                $region_count = 0;
                                
                                foreach($buy_links_regions as $buy_links_region) {
                                    
                                    $buy_links_region_name = $buy_links_region['tfpf_region_name'];
                                    $buy_links_formats = $buy_links_region['tfpf_book_format'];
                                    
                                    ?>
                                        <?php if ($region_count > 0) {
                                        
                                        ?>
                                        
                                        <li role="separator" class="divider"></li>
                                        
                                        <?php
                                        } ?>
                                        
                                        <li class="dropdown-header dropdown-region-header"><?php echo $buy_links_region_name; ?></li>
                                        
                                    <?php
                                    
                                    foreach($buy_links_formats as $buy_links_format) {
                                        $buy_links_format_name = $buy_links_format['tfpf_book_format_name'];
                                        $buy_links = $buy_links_format['tfpf_purchase_links'];
                                        
                                        ?>
                                        
                                        <li class="dropdown-header"><?php echo $buy_links_format_name; ?></li>
                                        
                                        <?php
                                        
                                        foreach($buy_links as $buy_link){
                                            
                                            $buy_link_retailer = $buy_link['tfpf_purchase_retailer'];
                                            $buy_link_url = $buy_link['tfpf_purchase_url'];
                                            
                                            ?>
                                        
                                        <li><a href="<?php echo $buy_link_url; ?>" target="_blank"><?php echo $buy_link_retailer; ?></a></li>
                                        
                                            <?php
                                            
                                            
                                        }
                                        
                                        
                                    }
                                    
                                $region_count++;
                                    
                                }
                                
                                
                                ?>
                                        
                                    </ul>
                                </div>
                                        
                                        <?php
                                
                                
                            }
                                
                                
                                ?>
                                
                                
                                
                                
                                
                                <?php if ($book_extract_show) {
            
                                    $book_extract_type = get_field('tfpf_book_extract_type');

                                    if ($book_extract_type == 'PDF File') {
                                        
                                        $book_extract_pdf = get_field('tfpf_book_extract_file');
                                        
                                        if ($book_extract_pdf ) {
                                            
                                            $book_extract_pdf_url = $book_extract_pdf['url'];

                                    ?>
                                
                                        <a href="<?php echo $book_extract_pdf_url; ?>" target="_blank">

                                            <button type="button" class="btn btn-default">Read an extract</button>

                                        </a>

                                    <?php 
                                            
                                        }
                                    }
            
            
                                    elseif ($book_extract_type == 'Text') {
                                        
                                        $book_extract_text = get_field('tfpf_book_extract_text');
                                        
                                        if ($book_extract_text) {
                                        
                                        ?>
                                
                                
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Read an extract</button>
                                
                                
                                
                                        <?php
                                            
                                        }
                                        
                                    }
                                
                                } ?>
                                
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <?php
        
       
    } 
}?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $book_title; ?> extract</h4>
            </div>
            <div class="modal-body">
                <?php echo $book_extract_text; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<?php

//Can put an else statement here to do somehting if no posts are found.


//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();
?>


