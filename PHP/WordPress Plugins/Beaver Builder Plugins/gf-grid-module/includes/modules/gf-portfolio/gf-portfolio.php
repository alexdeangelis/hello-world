<?php

/*
Widget Name: GF Grid
Description: Display posts or custom post types in a multi-column grid.
Author: Goodman Fox
Author URI: https://www.goodmanfox.com
*/

class GFPortfolioModule extends FLBuilderModule {

    function __construct() {

        parent::__construct(array(
            'name' => __('GF Grid', 'gf-grid-module'),
            'description' => __('Display posts or custom post types in a multi-column grid.', 'gf-grid-module'),
            'category' => __('GF Grid', 'gf-grid-module'),
            'dir' => GF_ADDONS_DIR . 'gf-portfolio/',
            'url' => GF_ADDONS_URL . 'gf-portfolio/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'partial_refresh' => true
        ));


        $this->add_js('isotope.pkgd');
        $this->add_js('imagesloaded.pkgd');

        add_action('wp_enqueue_scripts', array($this, 'localize_scripts'), 999999);

    }

    public function localize_scripts() {

        /* Do not attach to widget scripts since they are enqueued really late for some reason */
        wp_localize_script('gf-frontend-scripts', 'gf_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

    }

    function get_theme_color() {

        return gf_get_theme_color();

    }

}


FLBuilder::register_module('GFPortfolioModule', array(
        'post_loop_settings' => array(
            'title' => __('Loop Query', 'gf-grid-module'),
            'file' => FL_BUILDER_DIR . 'includes/loop-settings.php',
        ),
        'general' => array(
            'title' => __('General', 'gf-grid-module'),
            'sections' => array(
                'options_section' => array(
                    'title' => __('Grid Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'heading' => array(
                                'type' => 'text',
                                'label' => __('Heading for the grid', 'gf-grid-module'),
                                'connections' => array('string', 'html'),
                            ),

                            'filterable' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Filterable?', 'gf-grid-module'),
                                'default' => 'yes'
                            ),

                            'posts_per_page' => array(
                                'type' => 'gf-number',
                                'label' => __('Number of items to be displayed.', 'gf-grid-module'),
                                'default' => 6,
                                'connections' => array('custom_field')
                            ),

                            'taxonomy_filter' => array(
                                'type' => 'select',
                                'label' => __('Choose the taxonomy to display and filter on.', 'gf-grid-module'),
                                'description' => __('Choose the taxonomy information to display for posts/portfolio and the taxonomy that is used to filter the portfolio/post. Takes effect only if no taxonomy filters are specified when building query.', 'gf-grid-module'),
                                'options' => gf_get_taxonomies_map(),
                                'default' => 'category',
                                'connections' => array('custom_field')
                            ),

                            'image_linkable' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Link the image to the post/portfolio?', 'gf-grid-module'),
                                'default' => 'yes'
                            ),

                        )
                ),
            )
        ),

        'post_content' => array(
            'title' => __('Post Content', 'gf-grid-module'),
            'sections' => array(
                'content_section' => array(
                    'title' => __('Post Content Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'display_title' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Display project title below the post/portfolio?', 'gf-grid-module'),
                                'default' => 'yes'
                            ),

                            'display_summary' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Display project excerpt/summary below the post/portfolio?', 'gf-grid-module'),
                                'default' => 'yes'
                            ),
                        )
                ),
                'post_meta_section' => array(
                    'title' => __('Post Meta Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'display_author' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Display post author info below the post item?', 'gf-grid-module'),
                                'default' => 'no'
                            ),

                            'display_post_date' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Display post date info below the post item?', 'gf-grid-module'),
                                'default' => 'no'
                            ),

                            'display_taxonomy' => array(
                                'type' => 'gf-toggle-button',
                                'label' => __('Display taxonomy info below the post item? Choose the right taxonomy in Grid Settings section.', 'gf-grid-module'),
                                'default' => 'no'
                            ),
                            'layout_mode' => array(
                                'type' => 'select',
                                'label' => __('Choose a layout for the grid', 'gf-grid-module'),
                                'default' => 'fitRows',
                                'options' => array(
                                    'fitRows' => __('Fit Rows', 'gf-grid-module'),
                                    'masonry' => __('Masonry', 'gf-grid-module'),
                                ),
                                'connections' => array('custom_field')
                            ),

                        )
                ),
            )
        ),

        'layout' => array(
            'title' => __('Layout', 'gf-grid-module'),
            'sections' => array(

                'desktop_section' => array(
                    'title' => __('Desktop Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'per_line' => array(
                                'type' => 'gf-number',
                                'label' => __('Columns per row', 'gf-grid-module'),
                                'min' => 1,
                                'max' => 5,
                                'default' => 3,
                                'description' => 'columns (max: 5)',
                                'connections' => array('custom_field')
                            ),

                            'gutter' => array(
                                'type' => 'text',
                                'label' => __('Gutter', 'gf-grid-module'),
                                'description' => __('Space between columns in masonry grid.', 'gf-grid-module'),
                                'default' => '20',
                                'maxlength' => '2',
                                'size' => '4',
                                'description' => 'px',
                            ),
                        )
                ),
                'tablet_section' => array(
                    'title' => __('Tablet Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'tablet_gutter' => array(
                                'type' => 'text',
                                'label' => __('Gutter', 'gf-grid-module'),
                                'description' => __('Space between columns.', 'gf-grid-module'),
                                'default' => '10',
                                'maxlength' => '2',
                                'size' => '4',
                                'description' => 'px',
                            ),

                            'tablet_width' => array(
                                'type' => 'text',
                                'label' => __('Resolution', 'gf-grid-module'),
                                'description' => __('The resolution to treat as a tablet resolution.', 'gf-grid-module'),
                                'default' => '800',
                                'maxlength' => '4',
                                'size' => '5',
                                'description' => 'px',
                            )
                        )
                ),

                'mobile_section' => array(
                    'title' => __('Mobile Settings', 'gf-grid-module'), // Section Title
                    'fields' =>
                        array(

                            'mobile_gutter' => array(
                                'type' => 'text',
                                'label' => __('Gutter', 'gf-grid-module'),
                                'description' => __('Space between columns.', 'gf-grid-module'),
                                'default' => '10',
                                'maxlength' => '2',
                                'size' => '4',
                                'description' => 'px',
                            ),

                            'mobile_width' => array(
                                'type' => 'text',
                                'label' => __('Resolution', 'gf-grid-module'),
                                'description' => __('The resolution in pixels to treat as a mobile resolution.', 'gf-grid-module'),
                                'default' => '480',
                                'maxlength' => '4',
                                'size' => '5',
                                'description' => 'px',
                            )
                        )
                )
            )
        ),


        'style' => array(
            'title' => __('Style', 'gf-grid-module'),
            'sections' => array(

                'heading_section' => array(
                    'title' => __('Grid Heading', 'gf-grid-module'),
                    'fields' => array(

                        'heading_tag' => array(
                            'type' => 'select',
                            'label' => __('Heading HTML Tag', 'gf-grid-module'),
                            'default' => 'h3',
                            'options' => array(
                                'h1' => __('H1', 'gf-grid-module'),
                                'h2' => __('H2', 'gf-grid-module'),
                                'h3' => __('H3', 'gf-grid-module'),
                                'h4' => __('H4', 'gf-grid-module'),
                                'h5' => __('H5', 'gf-grid-module'),
                                'h6' => __('H6', 'gf-grid-module'),
                                'div' => __('Div', 'gf-grid-module'),
                            )
                        ),

                        'heading_color' => array(
                            'type' => 'color',
                            'label' => __('Heading Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'heading_font' => array(
                            'type' => 'font',
                            'label' => __('Heading font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'heading_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Heading Font Size', 'gf-grid-module'),
                            'responsive' => true,
                            'description' => 'px'
                        ),
                        'heading_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Heading Line height', 'gf-grid-module'),
                            'responsive' => true,
                            'description' => 'px'
                        ),
                        'heading_text_transform'  => array(
                            'type'          => 'select',
                            'label'         => __('Text Transform', 'gf-grid-module'),
                            'default'       => 'none',
                            'options'       => array(
                                'none' 			=> __( 'Default', 'gf-grid-module' ),
                                'capitalize' 	=> __( 'Capitalize', 'gf-grid-module' ),
                                'uppercase' 	=> __( 'Uppercase', 'gf-grid-module' ),
                                'lowercase' 	=> __( 'Lowercase', 'gf-grid-module' ),
                                'initial' 		=> __( 'Initial', 'gf-grid-module' ),
                                'inherit' 		=> __( 'Inherit', 'gf-grid-module' ),
                            ),
                        ),
                    )
                ),

                'filter_section' => array(
                    'title' => __('Grid Filters', 'gf-grid-module'),
                    'fields' => array(

                        'filter_color' => array(
                            'type' => 'color',
                            'label' => __('Filter Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'filter_hover_color' => array(
                            'type' => 'color',
                            'label' => __('Filter Hover Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'filter_active_border' => array(
                            'type' => 'color',
                            'label' => __('Active Filter Border Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'filter_font' => array(
                            'type' => 'font',
                            'label' => __('Filter Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'filter_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Filter Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'filter_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Filter Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'filter_text_transform'  => array(
                            'type'          => 'select',
                            'label'         => __('Text Transform', 'gf-grid-module'),
                            'default'       => 'none',
                            'options'       => array(
                                'none' 			=> __( 'Default', 'gf-grid-module' ),
                                'capitalize' 	=> __( 'Capitalize', 'gf-grid-module' ),
                                'uppercase' 	=> __( 'Uppercase', 'gf-grid-module' ),
                                'lowercase' 	=> __( 'Lowercase', 'gf-grid-module' ),
                                'initial' 		=> __( 'Initial', 'gf-grid-module' ),
                                'inherit' 		=> __( 'Inherit', 'gf-grid-module' ),
                            ),
                        ),
                        'filter_font_style' => array(
                            'type' => 'select',
                            'label' => __('Font Style', 'gf-grid-module'),
                            'default' => 'none',
                            'options' => array(
                                'none' => __('Default', 'gf-grid-module'),
                                'normal' => __('Normal', 'gf-grid-module'),
                                'italic' => __('Italic', 'gf-grid-module'),
                                'oblique' => __('Oblique', 'gf-grid-module'),
                            ),
                        ),
                    )
                ),

                'thumbnail_info_title_section' => array(
                    'title' => __('Thumbnail Info Entry Title', 'gf-grid-module'),
                    'fields' => array(

                        'thumbnail_info_title_tag' => array(
                            'type' => 'select',
                            'label' => __('Heading HTML Tag', 'gf-grid-module'),
                            'default' => 'h3',
                            'options' => array(
                                'h1' => __('H1', 'gf-grid-module'),
                                'h2' => __('H2', 'gf-grid-module'),
                                'h3' => __('H3', 'gf-grid-module'),
                                'h4' => __('H4', 'gf-grid-module'),
                                'h5' => __('H5', 'gf-grid-module'),
                                'h6' => __('H6', 'gf-grid-module'),
                                'div' => __('Div', 'gf-grid-module'),
                            )
                        ),
                        'thumbnail_info_title_color' => array(
                            'type' => 'color',
                            'label' => __('Title Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'thumbnail_info_title_hover_border_color' => array(
                            'type' => 'color',
                            'label' => __('Title Hover Border Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'thumbnail_info_title_font' => array(
                            'type' => 'font',
                            'label' => __('Title Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'thumbnail_info_title_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Title Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'thumbnail_info_title_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Title Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                    )
                ),

                'thumbnail_info_taxonomy_section' => array(
                    'title' => __('Thumbnail Info Taxonomy Terms', 'gf-grid-module'),
                    'fields' => array(

                        'thumbnail_info_tags_color' => array(
                            'type' => 'color',
                            'label' => __('Taxonomy Terms Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'thumbnail_info_tags_hover_color' => array(
                            'type' => 'color',
                            'label' => __('Taxonomy Terms Hover Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'thumbnail_info_tags_font' => array(
                            'type' => 'font',
                            'label' => __('Taxonomy Terms Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'thumbnail_info_tags_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Taxonomy Terms Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'thumbnail_info_tags_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Taxonomy Terms Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                    )
                ),

                'entry_title_section' => array(
                    'title' => __('Post Entry Title', 'gf-grid-module'),
                    'fields' => array(

                        'entry_title_tag' => array(
                            'type' => 'select',
                            'label' => __('Entry Title HTML Tag', 'gf-grid-module'),
                            'default' => 'h3',
                            'options' => array(
                                'h1' => __('H1', 'gf-grid-module'),
                                'h2' => __('H2', 'gf-grid-module'),
                                'h3' => __('H3', 'gf-grid-module'),
                                'h4' => __('H4', 'gf-grid-module'),
                                'h5' => __('H5', 'gf-grid-module'),
                                'h6' => __('H6', 'gf-grid-module'),
                                'div' => __('Div', 'gf-grid-module'),
                            )
                        ),
                        'entry_title_color' => array(
                            'type' => 'color',
                            'label' => __('Entry Title Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'entry_title_font' => array(
                            'type' => 'font',
                            'label' => __('Entry Title Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'entry_title_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Entry Title Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'entry_title_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Entry Title Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'entry_title_text_transform'  => array(
                            'type'          => 'select',
                            'label'         => __('Text Transform', 'gf-grid-module'),
                            'default'       => 'none',
                            'options'       => array(
                                'none' 			=> __( 'Default', 'gf-grid-module' ),
                                'capitalize' 	=> __( 'Capitalize', 'gf-grid-module' ),
                                'uppercase' 	=> __( 'Uppercase', 'gf-grid-module' ),
                                'lowercase' 	=> __( 'Lowercase', 'gf-grid-module' ),
                                'initial' 		=> __( 'Initial', 'gf-grid-module' ),
                                'inherit' 		=> __( 'Inherit', 'gf-grid-module' ),
                            ),
                        ),
                    )
                ),

                'entry_summary_section' => array(
                    'title' => __('Post Entry Summary', 'gf-grid-module'),
                    'fields' => array(

                        'entry_summary_color' => array(
                            'type' => 'color',
                            'label' => __('Entry Summary Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'entry_summary_font' => array(
                            'type' => 'font',
                            'label' => __('Entry Summary Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'entry_summary_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Entry Summary Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'entry_summary_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Entry Summary Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                    )
                ),

                'entry_meta_section' => array(
                    'title' => __('Post Entry Meta', 'gf-grid-module'),
                    'fields' => array(

                        'entry_meta_color' => array(
                            'type' => 'color',
                            'label' => __('Entry Meta Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'entry_meta_font' => array(
                            'type' => 'font',
                            'label' => __('Entry Meta Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'entry_meta_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Entry Meta Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'entry_meta_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Entry Meta Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                    )
                ),

                'entry_meta_link_section' => array(
                    'title' => __('Post Entry Meta Link', 'gf-grid-module'),
                    'fields' => array(

                        'entry_meta_link_color' => array(
                            'type' => 'color',
                            'label' => __('Entry Meta Link Color', 'gf-grid-module'),
                            'default' => '',
                            'show_reset' => true,
                        ),
                        'entry_meta_link_font' => array(
                            'type' => 'font',
                            'label' => __('Entry Meta Link Font', 'gf-grid-module'),
                            'default' => array(
                                'family' => 'Default',
                                'weight' => 'default'
                            ),
                        ),
                        'entry_meta_link_font_size' => array(
                            'type' => 'unit',
                            'label' => __('Entry Meta Link Font Size', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                        'entry_meta_link_line_height' => array(
                            'type' => 'unit',
                            'label' => __('Entry Meta Link Line height', 'gf-grid-module'),
                            'responsive' => true,
                        ),
                    )
                ),

            )
        ),
    )
);