.fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images.gf-text-three-images-bg-color {
    background-color: <?php echo '#' . $settings->gf_text_three_images_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_text_three_images_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images.gf-text-three-images-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images .main-text-wrap p {
    margin-bottom:15px;
    font-size:16px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images.gf-text-three-images-bg-image {
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

.fl-node-<?php echo $id; ?> .images-container {
    text-align:center;
}

.fl-node-<?php echo $id; ?> .images-container img {
    max-width: 200px;
    padding-bottom: 25px;
}

.fl-node-<?php echo $id; ?> .link-wrap {
    padding-bottom:20px;
    text-align: right;
}

.fl-node-<?php echo $id; ?> .link-wrap a {
    font-size:30px;
    color:#000;
    border-bottom:1px solid #000;
}

.fl-node-<?php echo $id; ?> .link-wrap a:hover {
    text-decoration: none;
    border-bottom:1px solid #cf6713;
    color:#cf6713;
}

.fl-node-<?php echo $id; ?> .link-wrap a:before {
    content:"\f0da";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    padding-right:8px;
}


.fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-text-three-images-wrap {
    padding:30px 0px;
}


@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-text-three-images-wrap {
        padding:40px 0px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-text-three-images .heading {
        margin-top:0px;
        font-size:48px;
        line-height: 50px;
        font-weight:bold;
        margin-bottom:25px;
    }
}