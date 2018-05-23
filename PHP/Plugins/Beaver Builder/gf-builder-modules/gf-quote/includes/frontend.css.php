.fl-node-<?php echo $id; ?> .gf-row.gf-quote.gf-quote-bg-color {
    background-color: <?php echo '#' . $settings->gf_quote_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_quote_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-quote.gf-quote-bg-image {
    background-image:url('<?php echo $url; ?>');
}

<?php if ($settings->gf_quote_separator_toggle == 'gf_quote_separator_toggle_yes') { ?>

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container {
    border-left:6px solid <?php echo '#' . $settings->gf_quote_separator_color ;?>;
    padding-left:50px;
}

@media(max-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container {
        padding-left:20px;
    }
}

<?php }

$quote_img = wp_get_attachment_url( $settings->gf_quote_image ); 
                        
if ($quote_img) { ?>

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container {
    width:85%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .image-container {
    width:10%;
}

@media (max-width:767px) {
    .fl-node-<?php echo $id; ?> .gf-row.gf-quote .image-container {
        display:none !important;
    }
}

<?php } else { ?>

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container {
    width:100%;
}

<?php } ?>



.fl-node-<?php echo $id; ?> .gf-row.gf-quote .image-container,
.fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container {
    display:inline-block;
    vertical-align: bottom;
}

.fl-node-<?php echo $id; ?> .overlay {
    background-color: rgba(255, 255, 255, 0.7);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-quote.gf-quote-bg-image {
    background-position: center;
    background-size: cover;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .main-text-wrap p {
    margin-bottom:15px;
}

.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}



.fl-node-<?php echo $id; ?> .gf-row.gf-text-image .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-quote-wrap {
    padding:30px 0px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container p {
    font-size:22px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-quote .image-container img {
    height:75px
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-quote-wrap {
        padding:80px 0px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-quote .quote-container p {
        font-size:35px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-quote .image-container img {
        height:100px;
    }
}