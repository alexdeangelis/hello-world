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
        
        $book_post_ID = $post->ID;
       
    } 
}

//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();

?>



<?php

//This is an example of a WP Query with an additional query

$args = array(
    'posts_per_page'  => 5,
    'post_type'       => 'reviews',
    'meta_query' => array(
        
        array(
            'key' => 'tfpf_associated_book', //Define the first field to filter by. This is a field within the post type above
            'value' => $book_post_ID, //Value of the key defined above
            'compare' => 'LIKE'
        )
      )
    ); 

$the_query = new WP_Query( $args );

//The IF statement, using the WP Query
//If the WP Query bring back any results, do this...
if ( $the_query->have_posts() ) {
    
    ?>

<div class="block__reviews">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="reviews__heading">
                    <h1>Reviews</h1>
                </div>
                
            </div>
            
            <div class="col-xs-12 col-sm-10 col-sm-push-1">
                
                <div class="reviews__carousel">
                    
                    <div class="owl-carousel">
                        

                        <?php

                        //This is the start of the cutom loop
                        while( $the_query->have_posts() ) {

                            $the_query->the_post();

                            //In here $post will bring back the post specific to the custom WP Query

                            $review_author = get_field('tfpf_review_author');

                            ?>

                        
                        <div>
                        
                            <?php the_content(); ?>
                            <p><span><?php echo $review_author; ?></span></p>
                        
                        </div>


                            <?php

                        } ?>
                        
                    </div>
                    
                </div>
                
                
                
            </div>
        </div>
    </div>
    
</div>


<script>
    jQuery(document).ready(function(){
      jQuery(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            /*autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,*/
            nav:true,
            dots:false,
            navText : ["<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x gold'></i><i class='fa fa-chevron-left fa-stack-1x fa-inverse'></i></span>","<span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x gold'></i><i class='fa fa-chevron-right fa-stack-1x fa-inverse'></i></span>"],
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                }
            }
        });
    });
</script>

<?php
}

//Can put an else statement here to do somehting if no posts are found.


//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();
?>