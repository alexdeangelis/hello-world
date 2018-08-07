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
    
    ?>

<?php
    
    //This is the start of the cutom loop
    while( $the_query->have_posts() ) {
        
        $the_query->the_post();
        
        //In here $post will bring back the post specific to the custom WP Query
        
        $book_description = get_field('tfpf_book_description');
        $buy_links_regions = get_field('tfpf_book_retail_region');
        
        
        if ($book_description) {
        ?>



<div class="block__book-about">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="book-about__heading">
                    <h1>About <?php the_title(); ?></h1>
                </div>
                
                <div class="book-about__text">
                    
                    <?php echo $book_description; ?>
                    
                </div>
                
                <div class="book-about__buttons">
                        
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

                </div>
                
            </div>
        </div>
    </div>
    
</div>





        <?php

        }
       
    } 
    
    ?>

<?php
}

//Can put an else statement here to do somehting if no posts are found.


//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();
?>