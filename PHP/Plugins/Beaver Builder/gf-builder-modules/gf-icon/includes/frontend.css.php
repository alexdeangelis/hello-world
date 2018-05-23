.fl-node-<?php echo $id; ?> .gf-row.gf-icon.gf-icon-bg-color {
    background-color: <?php echo '#' . $settings->gf_icon_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_icon_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-icon.gf-icon-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row.gf-icon.gf-icon-bg-image {
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


.fl-node-<?php echo $id; ?> .gf-icon-title h4 {
    font-size:28px;
    padding-bottom:10px;
}

.fl-node-<?php echo $id; ?> .gf-icon-image img {
    height:175px;
}

.fl-node-<?php echo $id; ?> .gf-icon-legend {
    font-size:26px;
    color: #000;
    padding-top:15px;
}

.fl-node-<?php echo $id; ?> .gf-icon-container {
    text-align:center;
    padding-top:25px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-icon-container {
        padding-top:0px;
    }
}

<?php if ($settings->gf_icon_separator_toggle == 'gf_icon_separator_toggle_yes') { ?>

.fl-node-<?php echo $id; ?> .gf-icon-hr hr {
    border: none;
    width: 70%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid #DDDDDD;
    box-shadow: 1px 20px 20px -20px #DDDDDD;
}

<?php } ?>

.fl-node-<?php echo $id; ?> .gf-row-icon-wrap {
    padding:30px 0px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-icon-wrap {
        padding:40px 0px;
    }
}