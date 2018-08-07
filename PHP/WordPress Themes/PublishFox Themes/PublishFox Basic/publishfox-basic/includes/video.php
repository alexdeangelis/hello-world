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
        
        $video_embed = get_field('tfpf_book_video_link');
        
        if ($video_embed) {
        
        ?>

        <div class="block__video">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2">

                        <div class="video__embed-container embed-container">
                            <?php echo $video_embed; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>


<?php
            
        }
       
    } 
}

//Can put an else statement here to do somehting if no posts are found.


//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();
?>


