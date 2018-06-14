.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left.gf-genre-slider-left-bg-color {
    background-color: <?php echo '#' . $settings->gf_genre_slider_left_bg_color; ?>;
}

<?php 
$url = wp_get_attachment_url( $settings->gf_genre_slider_left_bg_image );
?>

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left.gf-genre-slider-left-bg-image {
    background-image:url('<?php echo $url; ?>');
}

.fl-node-<?php echo $id; ?> .gf-row img {
    max-width:100%;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .main-text-wrap p {
    margin-bottom:15px;
    font-size:16px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left.gf-genre-slider-left-bg-image {
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

.fl-node-<?php echo $id; ?> .owl-genre-left {
    padding-top:20px;
}

.fl-node-<?php echo $id; ?> .owl-genre .item {
    width:100%;
}


.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .small-image-wrap {
    text-align: right;
}

@media (min-width:768px) {

    .fl-node-<?php echo $id; ?> .owl-carousel.owl-genre-left .owl-item img {
        height:212px;
    }

}

@media (min-width:992px) {

    .fl-node-<?php echo $id; ?> .owl-carousel.owl-genre-left .owl-item img {
        height:290px;
    }

}

@media (min-width:1200px) {

    .fl-node-<?php echo $id; ?> .owl-carousel.owl-genre-left .owl-item img {
        height:320px;
    }

}


.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .heading {
    font-size:32px;
    line-height: 38px;
}

.fl-node-<?php echo $id; ?> .gf-row-genre-slider-left-wrap {
    padding:30px 0px;
}

.fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .small-image-wrap img {
    height:75px
}


@media (min-width:768px) {
    .fl-node-<?php echo $id; ?> .gf-row-genre-slider-left-wrap {
        padding:40px 0px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .heading {
        margin-top:0px;
        font-size:48px;
        line-height: 50px;
        font-weight:bold;
        margin-bottom:25px;
    }

    .fl-node-<?php echo $id; ?> .gf-row.gf-genre-slider-left .small-image-wrap img {
        height:100px;
    }
}
