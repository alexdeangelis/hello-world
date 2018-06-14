.fl-node-<?php echo $id; ?> .gf-row.gf-video.gf-video-bg-color {
    background-color: <?php echo '#' . $settings->gf_video_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_video_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-video.gf-video-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row.gf-video.gf-video-bg-image {
    background-position: center;
    background-size: cover;
}

.fl-node-<?php echo $id; ?> .overlay {
    background-color: rgba(255, 255, 255, 0.4);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


<?php if ($settings->gf_video_type_toggle == 'gf_video_type_toggle_youtube' ) { ?>

.fl-node-<?php echo $id; ?> .embed-container { 
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
}

.fl-node-<?php echo $id; ?> .embed-container iframe, .fl-node-<?php echo $id; ?> .embed-container object, .fl-node-<?php echo $id; ?> .embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

<?php } ?>

<?php if ($settings->gf_video_type_toggle == 'gf_video_type_toggle_library') { ?>

.fl-node-<?php echo $id; ?> video {
    width: 100%;
    height: auto;
}

<?php } ?>


.fl-node-<?php echo $id; ?> .gf-row-video-wrap {
    padding:30px 0px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-video-wrap {
        padding:40px 0px;
    }
}