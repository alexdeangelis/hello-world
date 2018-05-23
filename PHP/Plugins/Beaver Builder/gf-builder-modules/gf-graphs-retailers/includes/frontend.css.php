.fl-node-<?php echo $id; ?> .gf-row.gf-graphs-retailers.gf-graphs-retailers-bg-color {
    background-color: <?php echo '#' . $settings->gf_graphs_retailers_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_graphs_retailers_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-graphs-retailers.gf-graphs-retailers-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row.gf-graphs-retailers.gf-graphs-retailers-bg-image {
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


.fl-node-<?php echo $id; ?> .gf-graphs-retailers-title h4 {
    font-size:28px;
    padding-bottom:10px;
}

.fl-node-<?php echo $id; ?> .gf-graphs-retailers-shortcode img {
    height:175px;
}


.fl-node-<?php echo $id; ?> .gf-graphs-retailers-container {
    text-align:center;
}

<?php if ($settings->gf_graphs_retailers_separator_toggle == 'gf_graphs_retailers_separator_toggle_yes') { ?>

.fl-node-<?php echo $id; ?> .gf-graphs-retailers-hr hr {
    border: none;
    width: 70%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid #DDDDDD;
    box-shadow: 1px 20px 20px -20px #DDDDDD;
}

<?php } ?>

.fl-node-<?php echo $id; ?> .gf-row .small-image-wrap {
    text-align: right;
}


.fl-node-<?php echo $id; ?> .gf-row-graphs-retailers-wrap {
    padding:30px 0px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-graphs-retailers .small-image-wrap img {
    height:75px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-graphs-retailers-wrap {
        padding:40px 0px;
    }
    .fl-node-<?php echo $id; ?> .gf-row.gf-graphs-retailers .small-image-wrap img {
        height:100px;
    }
}