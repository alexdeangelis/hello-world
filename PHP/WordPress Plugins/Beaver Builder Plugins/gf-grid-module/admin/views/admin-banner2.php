<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

?>

<div id="gf-banner-wrap">

    <div id="gf-banner" class="gf-banner-sticky">
        <h2><span><?php echo __('Addons for Beaver Builder', 'gf-grid-module'); ?></span><?php echo __('Plugin Settings', 'gf-grid-module') ?></h2>
        <div id="gf-buttons-wrap">
            <a class="gf-button" data-action="gf_save_settings" id="gf_settings_save"><i
                    class="dashicons dashicons-yes"></i><?php echo __('Save Settings', 'gf-grid-module') ?></a>
            <a class="gf-button reset" data-action="gf_reset_settings" id="gf_settings_reset"><i
                    class="dashicons dashicons-update"></i><?php echo __('Reset', 'gf-grid-module') ?></a>
        </div>
    </div>

</div>