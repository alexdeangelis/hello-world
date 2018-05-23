.fl-node-<?php echo $id; ?> .gf-row.gf-text-image.gf-text-image-right-text.gf-text-image-right-text-bg-color {
    background-color: <?php echo '#' . $settings->gf_text_image_right_text_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_text_image_right_text_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-text-image.gf-text-image-right-text.gf-text-image-right-text-bg-image {
    background-image:url('<?php echo $url; ?>');
}


.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}


.fl-node-<?php echo $id; ?> .gf-row.gf-text-image h4.sub-heading {
    text-transform:uppercase;
    margin-bottom:0px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-text-image .main-text-wrap p {
    margin-bottom:15px;
    font-size:16px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-text-image.gf-text-image-right-text.gf-text-image-right-text-bg-image {
    background-position: center;
    background-size: cover;
}

.fl-node-<?php echo $id; ?> .overlay {
    background-color: rgba(255, 255, 255, 0.7);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.fl-node-<?php echo $id; ?> .separator-wrap hr {
    border: none;
    width: 70%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid #DDDDDD;
    box-shadow: 1px 20px 20px -20px #DDDDDD;
}


.fl-node-<?php echo $id; ?> .gf-row.gf-text-image .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-text-image-right-wrap {
    padding:30px 0px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-text-image-right-wrap {
        padding:80px 0px;
    }
    .fl-node-<?php echo $id; ?> .gf-row.gf-text-image .heading {
        margin-top:0px;
        font-size:48px;
        line-height: 50px;
        font-weight:bold;
        margin-bottom:25px;
    }
}