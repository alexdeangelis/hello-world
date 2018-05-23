<?php 

$job_title = get_post_meta( get_the_ID(), 'job_title');

?>


<div class="fl-post-carousel-post" itemscope="itemscope" itemtype="<?php FLPostGridModule::schema_itemtype(); ?>">
	
	<?php FLPostGridModule::schema_meta(); ?>
    
    <a class="fl-post-carousel-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	
        <?php if ( has_post_thumbnail() && $settings->show_image ) : ?>
        <div class="fl-post-carousel-image">
            <?php $module->render_img( get_the_id() ) ?>
        </div>
        <?php endif; ?>
    
        <div class="fl-post-carousel-text">

            <h2 class="fl-post-carousel-title" itemprop="headline">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>

            <?php if ( $job_title ) : ?>
            <div class="fl-post-carousel-meta">
                <?php if ( $job_title ) : ?>
                    <div class="fl-post-carousel-author">
                    <?php
                        echo $job_title[0]; 
                    ?>
                    </div>
                <?php endif; ?>
                <?php if ( $job_title ) : ?>
                    <div class="fl-post-feed-date">
                        <?php /*FLBuilderLoop::post_date( $settings->date_format ); */

                        $terms = get_the_terms( get_the_ID(), 'publishing_house' );
                        $count = 0;
                        foreach($terms as $term) {
                            $count++;

                            if ($count>1) {
                                echo ', ' . $term->name;
                            } else {
                                echo $term->name;
                            }
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ( $settings->show_content || $settings->show_more_link ) : ?>
            <div class="fl-post-carousel-content">
                <?php if ( $settings->show_content ) : ?>
                <?php the_excerpt(); ?>
                <?php endif; ?>
                <?php if ( $settings->show_more_link ) : ?>
                <a class="fl-post-carousel-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo $settings->more_link_text; ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>

    </a> 

</div>
