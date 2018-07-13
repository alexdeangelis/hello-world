<?php
define( 'WP_USE_THEMES', false );
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require_once( __DIR__ . '/../../../wp-load.php' );

$options     = get_option( 'ytcf_settings' );
$yt_username = $options['ytcf_username'];
$yt_post_type = $options['ytcf_post_type'];
$yt_video_url_field = $options['ytcf_video_url_field'];
$yt_video_img_field = $options['ytcf_video_img_field'];

if( $options['key'] ) {
	
	if ( $yt_username ) {
		
		//$yt_channel_id = ytcf_get_channel( $yt_username )->id;
		
		$videos = ytcf_get_videos( array(
			'q'          => '',
			'part'       => 'id, snippet',
			'maxResults' => 50,
			"type"       => "video",
			"channelId"  => $yt_username,
			"order"      => "date",
		) );
		
		//$video_category = $options['category'];
			
        foreach ( $videos as $video ) {
            
            $title = $video->snippet->title;
            $id    = $video->id->videoId;

            $args = array(
                "post_type"       => $yt_post_type,
                "post_title_like" => $title
            );

            $video_exists = new WP_Query( $args );
            $video_exists = $video_exists->posts;

            if ( empty( $video_exists ) ) {

                $video_url = "https://www.youtube.com/embed/" . $id;
                
                $video_thumbnail = "https://img.youtube.com/vi/" . $id . "/0.jpg";

                $published = new DateTime( $video->snippet->publishedAt );

                $post = array(
                    'comment_status' => 'closed',
                    'ping_status'    => 'closed',
                    'post_author'    => 2,
                    'post_content'   => $video->snippet->description,
                    'post_name'      => sanitize_title( $title ),
                    'post_status'    => 'publish',
                    'post_date'      => $published->format( "Y-m-d H:i:s" ),
                    'post_title'     => $title,
                    'post_type'      => $yt_post_type,
                    /*'tax_input'      => array(
                        'video_category' => array(
                            $video_category
                        )
                    )*/
                );

                $post_id = wp_insert_post( $post );

                //wp_set_object_terms( $post_id, (int) $video_category, "video_category" );

                if ($yt_video_url_field) {
                    
                //Update the video URL field with the YouTube video URL
                update_post_meta( $post_id, $yt_video_url_field, $video_url );
                    
                }
                    
                if ($yt_video_img_field) {
                
                //Update the Video Thumbnail Image URL field with the link to the video thumbnail
                update_post_meta( $post_id, $yt_video_img_field, $video_thumbnail );
                
                }

                print "Post " . $post_id . " inserted!<br/>";

            } else {
                print "Video exists!<br/>";
            }

        }
		
	} else {
		print "Error: No username set.";
	}
} else {
	print "API Key not set";
}