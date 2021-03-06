<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$theme_color = gf_get_option('gf_theme_color', '#f94213');

$theme_hover_color = gf_get_option('gf_theme_hover_color', '#888888');

$autoload_widgets = gf_get_option('gf_autoload_widgets', false);

$debug_mode = gf_get_option('gf_enable_debug', false);

$custom_css = gf_get_option('gf_custom_css', '');

?>

<div class="gf-settings">

    <div class="postbox">

        <!-------------------
        OPTIONS HOLDER START
        -------------------->
        <div class="gf-menu-options settings-options">

            <div class="gf-inner">

                <!-------------------  LI TABS -------------------->

                <ul class="gf-tabs-wrap">
                    <li class="gf-tab selected" data-target="general"><i
                            class="gf-icon dashicons dashicons-admin-generic"></i><?php echo __('General', 'gf-grid-module') ?>
                    </li>
                    <li class="gf-tab" data-target="custom-css"><i
                            class="gf-icon dashicons dashicons-editor-code"></i><?php echo __('Custom CSS', 'gf-grid-module') ?>
                    </li>
                    <li class="gf-tab" data-target="debugging"><i
                            class="gf-icon dashicons dashicons-warning"></i><?php echo __('Debugging', 'gf-grid-module') ?>
                    </li>
                    <li class="gf-tab" data-target="premium-version"><i
                            class="gf-icon dashicons dashicons-yes"></i><?php echo __('Premium Version', 'gf-grid-module') ?>
                    </li>
                </ul>

                <!-------------------  GENERAL TAB -------------------->

                <div class="gf-tab-content general gf-tab-show">

                    <!---- Theme Colors -->
                    <div class="gf-box-side">
                        <h3><?php echo __('Theme Colors', 'gf-grid-module') ?></h3>
                    </div>
                    <div class="gf-inner gf-box-inner">
                        <div class="gf-row gf-field">
                            <label
                                class="gf-label"><?php echo __('Theme Color Scheme', 'gf-grid-module') ?></label>
                            <p class="gf-desc"><?php echo __('Most themes use a single color as a major color across the site. This color is often used for links, titles, buttons, icons, highlights etc. <br> To maintain the consistent look with the theme, specify the default color used by the theme activated on your site. This color will be applied to the plugin addons by default. <br>The hover color refers to the color set for links on mouse hover.', 'gf-grid-module') ?></p>
                        </div>

                        <div class="gf-clearfix"></div>

                        <!---- Theme color -->
                        <div class="gf-row gf-field gf-type-color">
                            <label class="gf-label"><?php echo __('Theme Color', 'gf-grid-module') ?></label>
                            <p class="gf-desc"><?php echo __('Select the default theme color.', 'gf-grid-module') ?></p>
                            <div class="gf-spacer" style="height: 5px"></div>
                            <input class="gf-colorpicker" name="gf_theme_color" type="text"
                                   data-default="#f94213" value="<?php echo $theme_color ?>"/>
                        </div>


                        <div class="gf-spacer"></div>

                        <!---- Theme Hover color -->
                        <div class="gf-row gf-field gf-type-color">
                            <label class="gf-label"><?php echo __('Theme Hover Color', 'gf-grid-module') ?></label>
                            <p class="gf-desc"><?php echo __('Select the default hover color for your theme.', 'gf-grid-module') ?></p>
                            <div class="gf-spacer" style="height: 5px"></div>
                            <input class="gf-colorpicker" name="gf_theme_hover_color" type="text"
                                   data-default="#888888" value="<?php echo $theme_hover_color ?>"/>
                        </div>



                    </div>

                    <div class="gf-clearfix"></div>
                    

                </div>

                <!------------------- Custom CSS TAB -------------------->

                <div class="gf-tab-content custom-css">

                    <!---- Custom CSS -->
                    <div class="gf-box-side">
                        <h3><?php echo __('Custom CSS', 'gf-grid-module') ?></h3>
                    </div>
                    <div class="gf-inner gf-box-inner">
                        <div class="gf-row gf-field gf-custom-css">
                            <label
                                class="gf-label"><?php echo __('Custom CSS', 'gf-grid-module') ?></label>
                            <div class="gf-spacer" style="height: 5px"></div>
                            <p class="gf-desc"><?php echo __('Please enter custom CSS for custom styling of addons', 'gf-grid-module') ?></p>

                            <div class="gf-spacer" style="height: 15px"></div>

                            <textarea class="gf-textarea" name="gf_custom_css" id="gf_custom_css" rows="20" cols="120"><?php echo $custom_css ?></textarea>

                        </div>
                    </div>

                    <div class="gf-clearfix"></div>

                </div>

                <!------------------- Debugging TAB -------------------->

                <div class="gf-tab-content debugging">

                    <!---- Enable script debugging -->
                    <div class="gf-box-side">
                        <h3><?php echo __('Debug Mode', 'gf-grid-module') ?></h3>
                    </div>
                    <div class="gf-inner gf-box-inner">
                        <div class="gf-spacer" style="height: 15px"></div>
                        <label
                            class="gf-label gf-label-outside"><?php echo __('Enable Script Debug Mode', 'gf-grid-module') ?></label>
                        <div class="gf-row gf-type-checkbox gf-field">
                            <p class="gf-desc"><?php echo __('Use unminified Javascript files instead of minified ones to help developers debug an issue', 'gf-grid-module') ?></p>
                            <div class="gf-toggle">
                                <input type="checkbox" class="gf-checkbox" name="gf_enable_debug" id="gf_enable_debug"
                                       data-default="" value="<?php echo $debug_mode ?>" <?php echo checked(!empty($debug_mode), 1, false) ?>>
                                <label for="gf_enable_debug"></label>
                            </div>
                        </div>
                    </div>

                    <div class="gf-clearfix"></div>

                    <!---- System Info -->
                    <div class="gf-box-side">
                        <h3><?php echo __('System Info', 'gf-grid-module') ?></h3>
                    </div>
                    <div class="gf-inner gf-box-inner">

                        <div class="gf-row gf-field">
                            <label
                                class="gf-label"><?php echo __('System Information', 'gf-grid-module') ?></label>
                            <p class="gf-desc"><?php echo __('Server setup information useful for debugging purposes.', 'gf-grid-module'); ?></p>

                            <div class="gf-spacer" style="height: 15px"></div>

                            <p class="debug-info"><?php echo nl2br(gf_get_sysinfo()); ?></p>
                        </div>

                    </div>

                    <div class="gf-clearfix"></div>

                </div>

                <!------------------- PREMIUM VERSION TAB -------------------->

                <div class="gf-tab-content premium-version">

                    <!---- Premium Version Information -->
                    <div class="gf-box-side">
                        <h3><?php echo __('Premium Version', 'gf-grid-module') ?></h3>
                    </div>
                    <div class="gf-inner gf-box-inner">


                        <div class="gf-row gf-field gf_premium_version">

                            <label
                                    class="gf-label"><?php echo __('Why upgrade to Premium Version of the plugin?!', 'gf-grid-module') ?></label>

                            <p>The premium version helps us to continue development of this plugin incorporating even
                                more features and enhancements along with offering more responsive support. Following are
                                some of the reasons why you may want to upgrade to the premium version of this
                                plugin.</p>

                            <label class="gf-label">New Premium Widgets</label>

                            <p>Although the free version of the Addons for Beaver Builder features a large repertoire of premium quality addons, the premium
                                version does even more.</p>

                            <ul>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/posts-block/" title="Post Blocks Addon" target="_blank">Post
                                        Blocks!</a> - Present your blog posts, events, news items or portfolio in a dozen creative ways. Comes with AJAX filtering,
                                    pagination and load more features to help visitors navigate your entire collection of blog posts or custom post types and
                                    their categories without reloading the page.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/tabs/" title="Tabs Addon" target="_blank">Responsive
                                        Tabs</a> - Exquisitely designed tabs that function seamlessly across all devices and resolutions. The
                                    plugin features never before choice of over dozen styles of tabs to choosen from.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/accordion/" title="Accordion/Toggle Addon" target="_blank">Accordion/Toggle</a> - Controls
                                    that capture collapsible content panels when space is limited.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/sliders/" title="Image Slider Widget" target="_blank">Image
                                        Slider</a> - Create a responsive slider of images with support
                                    for captions,
                                    multiple slider types like Nivo, Flex, Slick and lightweight sliders, thumbnail
                                    navigation etc.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/image-gallery/" title="Image Gallery Widget" target="_blank">Image
                                        Gallery</a> - Create a gallery of images with options for masonry
                                    or fit rows, pagination, lazy load, lightbox support etc.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/video-gallery/" title="Video Gallery Widget" target="_blank">Video
                                        Gallery</a> - Create a beautiful gallery of videos to help
                                    showcase a collection of YouTube/Vimeo videos on your site.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/gallery-carousel/" title="Image Carousel" target="_blank">Image
                                        Carousel</a> - Build a responsive carousel of images.</li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/gallery-carousel/" title="Video Carousel" target="_blank">Video
                                        Carousel</a> - Build a responsive carousel of YouTube/Vimeo
                                    videos.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/buttons/" title="Buttons Addon" target="_blank">Buttons</a> - Animated buttons with great choice of colors.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/icon-lists/" title="Icon List" target="_blank">Icon List</a> - - Create a list of icons with description and link - for social media profiles,
                                    for showcasing services or features as well with icons or images.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/faq-element/" title="FAQ Addon" target="_blank">FAQ</a> - Create a set of Frequently Asked Questions for display in a
                                    page.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/features/" title="Features Addon" target="_blank">Features Addon</a> for showcasing product features or services provided by an agency/business.
                                </li>
                            </ul>

                            <div class="gf-spacer" style="height: 15px"></div>

                            <a class="gf-button purchase" href="https://www.livemeshthemes.com/beaver-builder-addons/pricing/"><i class="dashicons dashicons-cart"></i><?php echo __('Purchase Now', 'gf-grid-module'); ?></a>

                            <div class="gf-spacer" style="height: 25px"></div>

                            <label class="gf-label">Additional Features</label>

                            <p>Along with incorporating many new elements into premium version, the pro version is being
                                updated with additional features for existing elements -</p>

                            <ul>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/portfolio-grid-pro/" title="Livemesh Grid" target="_blank">Lazy Load</a> - The portfolio/post grid and image gallery elements
                                    incorporate option to lazy load posts/images with the click of a Load More button.
                                </li>
                                <li><a href="https://www.livemeshthemes.com/beaver-builder-addons/portfolio-grid-pro/" title="Livemesh Grid" target="_blank">Pagination</a> - Create a grid of posts or custom post types with AJAX
                                    based pagination support.
                                </li>
                                <li><strong>Lightbox Support</strong> - The premium version comes with support for
                                    Lightbox for grid and carousel elements.
                                </li>
                                <li><strong>Customizations</strong> - Ability to choose custom font sizes and colors for
                                    certain elements like services and icon lists.
                                </li>
                                <li><strong>Custom Animations</strong> - Choose from over <strong>40+ animations</strong>
                                    for most elements (excludes sliders, carousels and grid). The animations display on
                                    user scrolling to the element or when the element becomes visible in the browser window.
                                </li>
                                <li><strong>Sample Data</strong> - Sample data that you can import into your site to get
                                    started quickly on the addon elements and some sample layouts.
                                </li>
                            </ul>

                            <label class="gf-label">Premium Support</label>

                            <p>We offer premium support for our paid customers with following benefits - </p>

                            <ul>
                                <li><strong>Dedicated Forum</strong> - The customers will be provided access to a
                                    dedicated support forum.
                                </li>
                                <li><strong>Public and Private Tickets</strong> - Private tickets help you work with us
                                    directly regarding the issues you are facing in your site by sharing the details of
                                    your site securely.
                                </li>
                                <li><strong>Searchable Topics</strong> - The support forum is searchable for public
                                    topics helping you look for resolution of similar issues reported by other
                                    customers.
                                </li>
                                </li>
                                <li><strong>Faster turnaround</strong> - The threads opened by paid customers will be
                                    attended to within 24 hours of opening a ticket.
                                </li>
                                <li><strong>Bug fixes and Enhancements</strong> - Any fixes and enhancements made to the
                                    elements will be prioritized to arrive quicker on the premium version.
                                </li>
                                <li><strong>Proven Expertize</strong> - Having served over <strong>12,280+
                                        customers</strong> of our themes over past 3 years, the support provided by us
                                    is proven in competence and commitment.
                                </li>
                            </ul>

                            <div class="gf-spacer" style="height: 25px"></div>

                            <a class="gf-button purchase" href="https://www.livemeshthemes.com/beaver-builder-addons/pricing/"><i class="dashicons dashicons-cart"></i><?php echo __('Go Premium', 'gf-grid-module'); ?></a>

                        </div>

                    </div>

                </div>

                <!-------------------  OPTIONS HOLDER END  -------------------->
            </div>
            
        </div>

        <!------------------- BUILD PANEL SETTINGS -------------------->

    </div>

</div>
