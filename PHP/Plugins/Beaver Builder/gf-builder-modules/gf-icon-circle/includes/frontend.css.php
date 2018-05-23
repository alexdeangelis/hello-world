.fl-node-<?php echo $id; ?> .gf-row.gf-icon-circle.gf-icon-circle-bg-color {
    background-color: <?php echo '#' . $settings->gf_icon_circle_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_icon_circle_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-icon-circle.gf-icon-circle-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row.gf-icon-circle.gf-icon-circle-bg-image {
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

.fl-node-<?php echo $id; ?> .gf-icon-circle-container .gf-circle {
    border-radius: 50%;
	width: 200px;
	height: 200px;
    margin:auto;
    display:flex;
    align-items:center;
    justify-content: center;
}

.fl-node-<?php echo $id; ?> .gf-icon-circle-1-container .gf-circle {
    background-color:<?php echo '#' . $settings->gf_icon_circle_1_color; ?>;

    <?php if ($settings->gf_icon_circle_1_border_toggle == 'gf_icon_circle_1_border_toggle_on') { ?>

    border: 1px solid <?php echo '#' . $settings->gf_icon_circle_1_border_color; ?>;

    <?php } ?>
}



.fl-node-<?php echo $id; ?> .gf-icon-circle-2-container .gf-circle {
    background-color:<?php echo '#' . $settings->gf_icon_circle_2_color; ?>;

    <?php if ($settings->gf_icon_circle_2_border_toggle == 'gf_icon_circle_2_border_toggle_on') { ?>

    border: 1px solid <?php echo '#' . $settings->gf_icon_circle_2_border_color; ?>;

    <?php } ?>
}

.fl-node-<?php echo $id; ?> .gf-icon-circle-3-container .gf-circle {
    background-color:<?php echo '#' . $settings->gf_icon_circle_3_color; ?>;

    <?php if ($settings->gf_icon_circle_3_border_toggle == 'gf_icon_circle_3_border_toggle_on') { ?>

    border: 1px solid <?php echo '#' . $settings->gf_icon_circle_3_border_color; ?>;

    <?php } ?>
}



.fl-node-<?php echo $id; ?> .gf-icon-circle-container .gf-circle .gf-circle-legend {
    text-align:center;
font-size:22px;
color:#000;
padding-top:10px;
}

.fl-node-<?php echo $id; ?> .gf-icon-circle-container .gf-circle-title {
    text-align:center;
}

.fl-node-<?php echo $id; ?> .gf-icon-circle-container .gf-circle-title h4 {
    font-size:28px;
}


.fl-node-<?php echo $id; ?> .gf-icon-circle-container {
padding-top:25px;
}

@media (min-width:992px) {
    .fl-node-<?php echo $id; ?> .gf-icon-circle-container {
        padding-top:0px;
    }
}

.fl-node-<?php echo $id; ?> .gf-row-icon-circle-wrap {
    padding:30px 0px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-icon-circle-wrap {
        padding:70px 0px 40px;
    }
}