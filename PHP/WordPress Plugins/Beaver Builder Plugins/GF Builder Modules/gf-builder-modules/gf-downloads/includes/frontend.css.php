.fl-node-<?php echo $id; ?> .gf-row.gf-downloads.gf-downloads-bg-color {
    background-color: <?php echo '#' . $settings->gf_downloads_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_downloads_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-downloads.gf-downloads-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-downloads .main-text-wrap p {
    margin-bottom:15px;
    font-size:16px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-downloads.gf-downloads-bg-image {
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

.fl-node-<?php echo $id; ?> .separator-wrap hr {
    border: none;
    width: 70%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid #DDDDDD;
    box-shadow: 1px 20px 20px -20px #DDDDDD;
}

.fl-node-<?php echo $id; ?> .downloads-image-container img {
    height: 100px;
}

.fl-node-<?php echo $id; ?> .downloads-image-container {
    padding-bottom:20px;
}

.fl-node-<?php echo $id; ?> .download-link {
    padding-bottom:5px;
}

.fl-node-<?php echo $id; ?> .download-link:last-child {
    padding-bottom:15px;
}


.fl-node-<?php echo $id; ?> .download-link p a {
    color:#000;
    border-bottom: 1px solid #000;
    font-size:24px;
}

.fl-node-<?php echo $id; ?> .download-link p a:hover {
    color:#cf6713;
    border-bottom: 1px solid #cf6713;
}

.fl-node-<?php echo $id; ?> .download-link p a:before {
    content: "\f0da";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    padding-right: 8px;
}


.fl-node-<?php echo $id; ?> .gf-row.gf-downloads .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-downloads-wrap {
    padding:30px 0px;
}


@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-downloads-wrap {
        padding:40px 0px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-downloads .heading {
        margin-top:0px;
        font-size:48px;
        line-height: 50px;
        font-weight:bold;
        margin-bottom:25px;
    }
}

