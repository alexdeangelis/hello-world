<?php
/*
 Plugin Name: YouTube Channel Fetcher
 Plugin URI: http://www.goodmanfox.com
 Description: A plugin to fetch a YouTube channel.
 Version: 1.0.1
 Author: Goodman Fox
 Author URI: http://www.goodmanfox.com
 License: GPL2
 */

//  CPT setup
//$cpt = 'sophies-world';
//$taxonomy = 'video_category';
//$term = 'marians-youtube-channel';
$options = get_option( 'ytcf_settings' );

//  API settings
if($options['key']) {
	require_once __DIR__ . '/vendor/autoload.php';
	$youtube = new Madcoda\Youtube( array( 'key' => $options['key'] ) );
	
	$yt_username = $options['ytcf_username'];

//  Functions
	
	add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
	function title_like_posts_where( $where, &$wp_query ) {
		global $wpdb;
		if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
			$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
		}
		
		return $where;
	}
	
	function ytcf_get_channel( $username ) {
		global $youtube;
		
		return $youtube->getChannelByName( $username, array( "part" => "id" ) );
	}
	
	function ytcf_get_videos( $q ) {
		global $youtube;
		
		return $youtube->searchAdvanced( $q, false );
	}

//  Data
	if ( $yt_username ) {
        //$yt_channel_id = ytcf_get_channel( $yt_username )->id;
		$yt_channel_id = $yt_username;
	}
}

//  Options Page
add_action( 'admin_menu', 'ytcf_add_admin_menu' );
add_action( 'admin_init', 'ytcf_settings_init' );


//Adds the YouTube Videos Menu Item, in order to add the API Key & User Name
function ytcf_add_admin_menu(  ) {
	
	add_menu_page( 'YouTube Channel Fetcher', 'YouTube Channel Fetcher', 'manage_options', 'gf_ytcf', 'ytcf_options_page' );
	
}


function ytcf_settings_init(  ) {
	
	$options = get_option( 'ytcf_settings' );
 
	register_setting( 'ytChannelFetcher', 'ytcf_settings' );
	
	add_settings_section(
		'ytcf_ytChannelFetcher_section',
		__( 'YouTube Channel Fetcher', 'youtube-channel-fetcher' ),
		'ytcf_settings_section_callback',
		'ytChannelFetcher'
	);
	
	add_settings_field(
		'ytcf_key',
		__( 'API Key', 'youtube-channel-fetcher' ),
		'ytcf_key_render',
		'ytChannelFetcher',
		'ytcf_ytChannelFetcher_section'
	);
	
	if($options['key']) {
		
		add_settings_field(
			'ytcf_username',
			__( 'User ID', 'youtube-channel-fetcher' ),
			'ytcf_username_render',
			'ytChannelFetcher',
			'ytcf_ytChannelFetcher_section'
		);
        
        add_settings_field(
			'ytcf_post_type',
			__( 'Post Type Slug', 'youtube-channel-fetcher' ),
			'ytcf_post_type_render',
			'ytChannelFetcher',
			'ytcf_ytChannelFetcher_section'
		);
        
        add_settings_field(
			'ytcf_video_url_field',
			__( 'Video URL Field', 'youtube-channel-fetcher' ),
			'ytcf_video_url_field_render',
			'ytChannelFetcher',
			'ytcf_ytChannelFetcher_section'
		);
        
        add_settings_field(
			'ytcf_video_img_field',
			__( 'Video Thumbnail Image Field', 'youtube-channel-fetcher' ),
			'ytcf_video_img_field_render',
			'ytChannelFetcher',
			'ytcf_ytChannelFetcher_section'
		);
		
		/*add_settings_field(
			'ytcf_category',
			__( 'Video Category', 'youtube-channel-fetcher' ),
			'ytcf_category_render',
			'ytChannelFetcher',
			'ytcf_ytChannelFetcher_section'
		);*/
		
	}
	
}

function ytcf_key_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	?>
    <input type='text' name='ytcf_settings[key]' value='<?php echo $options['key']; ?>'>
	<?php
	
}

function ytcf_username_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	?>
	<input type='text' name='ytcf_settings[ytcf_username]' value='<?php echo $options['ytcf_username']; ?>'>
    <?php //if($options['ytcf_username']) { $yt_channel_id = ytcf_get_channel( $options['ytcf_username'] )->id; ?>
    <?php if($options['ytcf_username']) { $yt_channel_id = $options['ytcf_username']; ?>
    <p>ID: <?php echo $yt_channel_id; ?></p>
    <?php } ?>
	<?php
	
}

function ytcf_post_type_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	?>
	<input type='text' name='ytcf_settings[ytcf_post_type]' value='<?php echo $options['ytcf_post_type']; ?>'>
	<?php
	
}

function ytcf_video_url_field_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	?>
	<input type='text' name='ytcf_settings[ytcf_video_url_field]' value='<?php echo $options['ytcf_video_url_field']; ?>'>
	<?php
	
}

function ytcf_video_img_field_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	?>
	<input type='text' name='ytcf_settings[ytcf_video_img_field]' value='<?php echo $options['ytcf_video_img_field']; ?>'>
	<?php
	
}

/*function ytcf_category_render(  ) {
	
	$options = get_option( 'ytcf_settings' );
	
	$terms = get_terms(array("taxonomy"=>"video_category","hide_empty"=>false));
	?>
    <select name="ytcf_settings[category]">
        <option>- Please Select -</option>
        <?php foreach($terms as $term) { ?>
        <option value="<?php echo $term->term_id; ?>" <?php selected($term->term_id,$options['category']); ?>><?php echo $term->name; ?></option>
        <?php } ?>
    </select>
	<?php
	
}*/


function ytcf_settings_section_callback(  ) {
	
	echo __( 'Please provide a valid YouTube API key, YouTube User ID, the post type which will receive the YouTube videos & the custom fields that will recieve the YouTube embed URL & image thumbnail URL.<br/><br/>After all that is done, you can let the cron job do the rest of the work!', 'youtube-channel-fetcher' );
	
}


function ytcf_options_page(  ) {
	
	?>
	<form action='options.php' method='post'>
		
		<?php
		settings_fields( 'ytChannelFetcher' );
		do_settings_sections( 'ytChannelFetcher' );
		submit_button();
		?>
	
	</form>
	<?php
	
}


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5b460bbac167312f38eaef0c/',
    __FILE__,
    'youtube-channel-fetcher',
    1
);
// $MyUpdateChecker->license = "aKernlLicenseKey";  <---- Optional!