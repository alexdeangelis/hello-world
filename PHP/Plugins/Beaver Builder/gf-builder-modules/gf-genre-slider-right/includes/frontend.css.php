.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right.gf-genre-slider-right-bg-color {
    background-color: <?php echo '#' . $settings->gf_genre_slider_right_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_genre_slider_right_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right.gf-genre-slider-right-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-text-image h4.sub-heading {
    text-transform:uppercase;
    margin-bottom:0px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right .main-text-wrap p {
    margin-bottom:15px;
    font-size:16px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right.gf-genre-slider-right-bg-image {
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

.fl-node-<?php echo $id; ?> .owl-genre {
    padding-top:20px;
}

.fl-node-<?php echo $id; ?> .owl-genre .item {
    width:100%;
}

.fl-node-<?php echo $id; ?> .owl-genre .item img {
    height:240px;
    width: auto;
    margin: auto;
}


@media (min-width:992px) {
    .fl-node-<?php echo $id; ?> .owl-genre .item img {
        height:347px;
    }
}


.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-genre-slider-right-wrap {
    padding:30px 0px;
}

@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-genre-slider-right-wrap {
        padding:40px 0px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-right .heading {
        margin-top:0px;
        font-size:48px;
        line-height: 50px;
        font-weight:bold;
        margin-bottom:25px;
    }
}