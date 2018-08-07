<?php 

//This is the argument that defines the new WP Query
$args = array(
    'posts_per_page'    => 1, //The number of posts to get. -1 means get all
    'post_type'         => 'authors', //The post type goes here
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
        
        ?>

    <div class="block__author-promo">
        <div class="container">
            <div class="row flex">
                <div class="col-xs-12 col-sm-4">
                    <div class="author-promo__image">
                        
                        
                        <?php 
            
                        //If there is a featured image do this...
                        if( get_the_post_thumbnail() ) {

                            //Gets the URL of the featured image...

                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            
                            ?>
                        
                            <img src="<?php echo $url; ?>"/>
                        
                            <?php
                            

                        } 

                        //If there isn't a featured image do this...

                        else { 

                            //Do something else...

                        }


                        ?>
                        
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 flex align-items-center">
                    <div class="author-promo__details">
                        <div class="author-promo__details__heading">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="author-promo__details__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        


        <?php
       
    } 
}

//Can put an else statement here to do somehting if no posts are found.


//This resets the post data so that $post will work correctly on the page
wp_reset_postdata();
?>

